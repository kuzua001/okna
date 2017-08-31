/**
 * Created by ivan on 7/31/17.
 */
import { Directive, ElementRef, Renderer, Input, OnChanges } from '@angular/core';
import $ from "jquery";


declare let tinymce: any;

@Directive({ selector: '[interfaceElement]' })
export class InterfaceDirective {

	private element: Node;

	private interfaceSettings;

	public updateInterface(interfaceSettings)
	{
		this.interfaceSettings = interfaceSettings;
		this.updateModel();
	}


	public readInterfaceValues() {
		this.interfaceSettings.values = this.readValuesStep(this.interfaceSettings.params, '');
		return this.interfaceSettings.values;
	}

	private readValuesStep(interfaceSettings, levelName)
	{
		let values = {};

		for (let i in interfaceSettings) {
			if (!$.isNumeric(i)) {
				//continue;
			}

			let item     = interfaceSettings[i];
			let itemName = levelName !== '' ? (levelName + '-' + item.key) : item.key;
			let itemId   = 'interface-' + itemName;

			if (item.type == 'composite') {
				console.log(itemName);
				values[item.key] = {};
				$('[data-section-name=' + itemName + '].existing').each((i, elem) => {
					let sectionType = $(elem).attr('data-section-type');
					values[item.key][i] = this.readValuesStep(item.availableInstances[sectionType], itemName +  '-' + i);
					values[item.key][i].type = sectionType;
				});
			} else {
				switch (item.type) {
					case 'checkbox':
						values[item.key] = $('#' + itemId).prop('checked');
						break;
					default:
						values[item.key] = $('#' + itemId).val();
						break;
				}
			}
		}

		return values;
	}

	private templateCounter: number = 0;

	private generateInterface(interfaceSettings, values, levelName: string)
	{

		this.templateCounter ++;

		let $interface = $('<div>');

		for (let i in interfaceSettings) {
			if (!$.isNumeric(i)) {
				//continue;
			}

			let $input;
			let $inputBlock = $('<div class="form-group">');


			let item     = interfaceSettings[i];
			let itemName = levelName !== '' ? (levelName + '-' + item.key) : item.key;
			let itemId   = 'interface-' + itemName;

			if (item.type == 'composite') {
				for (let i in values[item.key]) {
					let sectionSettings = values[item.key][i];
					let sectionType = sectionSettings.type;


					console.log(sectionSettings);
					console.log(sectionType);
					console.log(item.availableInstances);


					let $interfaceSub = this.generateInterface(item.availableInstances[sectionType], sectionSettings, itemName +  '-' + i);
					$interfaceSub.attr('data-section-type', sectionType);
					$interfaceSub.attr('data-section-name', itemName);
					$interfaceSub.addClass('section').addClass('existing');
					$inputBlock.append($interfaceSub);

					console.log($interfaceSub.html());
				}

				let templateName = 'ID' + this.templateCounter;

				let $newElementsBlock = $('<div class="new-elements" data-template-name="' + templateName + '">');
				let $newElementsSelect = $('<select>');
				let $newElementsHiddenList = $('<div class="new-elements-list" style="display: none">');

				for (let type in item.availableInstances) {
					$newElementsSelect.append($('<option value="' + type + '">' + type  + '</option>'));
					let $interfaceSub = this.generateInterface(item.availableInstances[type], [], itemName +  '-' + templateName);
					$interfaceSub.attr('data-section-type', type);
					$interfaceSub.attr('data-section-name', itemName);
					$interfaceSub.addClass('section');
					$newElementsHiddenList.append($interfaceSub);
				}

				$newElementsBlock.append($newElementsSelect);
				$newElementsBlock.append($newElementsHiddenList);
				$newElementsBlock.append($('<button class="add btn btn-success"><i aria-hidden="true" class="fa fa-plus"></i></button>'));

				$inputBlock.append($newElementsBlock);

			} else {
				let value = values[item.key] ? values[item.key] : '';

				switch (item.type) {
					case 'string':
						$input = $('<input type="text">');
						$input.val(value);
						break;
					case 'html':
						$input = $('<textarea class="tinymce">');
						$input.val(value);
						break;
					case 'text':
						$input = $('<input type="text">');
						$input.val(value);
						break;
					case 'textarea':
						$input = $('<textarea>');
						$input.val(value);
						break;
					case 'checkbox':
						$input = $('<input type="checkbox">');
						$input.prop('checked', value);
						break;
				}


				$input.attr('id', itemId);

				if (item.type == 'checkbox') {
					$input.addClass('checkbox').addClass('checkbox-inline');
				} else {
					$input.addClass('form-control');
				}

				$inputBlock.append($('<label for="' + itemId + '">' + item.title + '</label>'));
				$inputBlock.append($input);

			}

			$interface.append($inputBlock);
		}

		return $interface;

	}


	private initSectionConstructor()
	{
		let directive = this;

		$('.new-elements .btn.add').each((i, elem) => {
			let $elem = $(elem);
			let $parent = $elem.parent();
			let templateName = $parent.data('template-name');
			$elem.click(() => {
				console.log('added!!');
				let sectionType = $parent.children('select').val();
				let $newSection = $parent.children('.new-elements-list').children('[data-section-type=' +  sectionType + ']');
				let newIndex = $parent.parent().children('[data-section-type]').length;
				let html = $newSection.get(0).outerHTML.replace(new RegExp(templateName, 'g'), newIndex);
				let $preparedSection = $(html).addClass('existing');
				$preparedSection.insertBefore($parent);
				directive.initSectionConstructor();
			});
		});
	}

	updateModel()
	{
		console.log('i am changing');
		let $interface: JQuery = $(this.element);
		$interface.empty();

		console.log(this.interfaceSettings.params);
		console.log(this.interfaceSettings.values);

		this.templateCounter = 0;
		$interface.append(this.generateInterface(this.interfaceSettings.params, this.interfaceSettings.values, ''));
		this.initSectionConstructor();

		tinymce.remove();
		tinymce.init({
			"selector" : ".tinymce",
			"plugins" : "code",
			"toolbar" : "code",
			"menubar" : "tools",
			// "content_css" : "/css/tinymce.css"
		});
	}

	constructor(private elem: ElementRef, private renderer: Renderer)
	{
		this.element = elem.nativeElement;
	}
}