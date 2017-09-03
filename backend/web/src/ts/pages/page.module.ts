import { NgModule } from "@angular/core";
import { CommonModule } from '@angular/common';
import {NewPageComponent, PageComponent} from "./page.component";
import { InterfaceDirective } from '../interface/interface.directive';
import { FormsModule } from '@angular/forms';

@NgModule({
	declarations: [PageComponent, NewPageComponent, InterfaceDirective],
	exports: [PageComponent, NewPageComponent],
	imports: [
		CommonModule, FormsModule
	]
})
export class PagesModule {
}
