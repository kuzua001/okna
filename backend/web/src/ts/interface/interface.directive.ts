/**
 * Created by ivan on 7/31/17.
 */
import { Directive, ElementRef, Renderer, Input, OnChanges } from '@angular/core';
import $ from "jquery";

@Directive({ selector: '[interfaceElement]' })
export class InterfaceDirective implements OnChanges {

	private element: Node;

	private interfaceSettings;

	ngOnChanges(changes) {
		if(changes.interfaceSettings){
			this.updateModel();
		}
	}

	private generateInterface(interfaceSettings)
	{
		let $elem;

		for (let i in interfaceSettings) {
			let item = interfaceSettings[i];
			switch (item.type) {
				case 'text':
					$elem = $('<input type="text">');
					break;
				case 'textarea':
					$elem = $('<textarea>');
					break;
				case 'checkbox':
					$elem = $('<input type="checkbox">');
					break;
				case 'composite':
					for (let i in item.availableInstances) {
						$elem = this.generateInterface(item.availableInstances[i]);
					}
					break;
			}
		}

		return $elem;

	}


	updateModel()
	{
		console.log('i am changing');
		let $interface: JQuery = $(this.element);
		$interface.empty();
		$interface.append(this.generateInterface(this.interfaceSettings));
	}

	constructor(private elem: ElementRef, private renderer: Renderer)
	{
		this.element = elem.nativeElement;

		this.interfaceSettings = [
			{type: 'text',     name : 't1', title : 'Заголовок'},
			{type: 'textarea', name : 't2', title : 'введите текст'},
			{type: 'checkbox', name : 't3', title : 'Заголовок'},

		];

		let $obj = this;
		$(function() {
			$obj.updateModel();
		});
	}
}