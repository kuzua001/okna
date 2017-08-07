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

	updateModel() {
		console.log('i am changing');
		let $parent: JQuery = $(this.element);
		for (let i in this.interfaceSettings) {
			let item = this.interfaceSettings[i];
			let $elem;
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
			}

			$parent.append(item.title);
			$parent.append($elem);
		}
	}

	constructor(private elem: ElementRef, private renderer: Renderer) {
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