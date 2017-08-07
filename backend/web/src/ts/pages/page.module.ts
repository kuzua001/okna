import { NgModule } from "@angular/core";
import { CommonModule } from '@angular/common';
import { PageComponent } from "./page.component";
import { InterfaceDirective } from '../interface/interface.directive';

@NgModule({
	declarations: [PageComponent, InterfaceDirective],
	exports: [PageComponent],
	imports: [
		CommonModule
	]
})
export class PagesModule {
}
