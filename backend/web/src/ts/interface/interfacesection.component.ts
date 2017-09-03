/**
 * Created by ivan on 7/31/17.
 */
import { Component, ElementRef, Renderer, Input } from '@angular/core';
import $ from "jquery";

@Component({
	selector: '[interfaceSection]',
	templateUrl: `/admin/templates/interface/section.html?v=${new Date().getTime()}`
})
export class InterfaceSectionComponent {
	@Input() params;
	@Input() values;
}