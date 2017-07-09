import { NgModule }      from '@angular/core';
import { Component } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { platformBrowserDynamic } from "@angular/platform-browser-dynamic";


@Component({
	selector: 'ng-app',
	template: `<h1>Hello {{name}}</h1>`
})
export class AppComponent { name = 'Angular'; }


@NgModule({
	imports: [ BrowserModule ],
	declarations: [ AppComponent ],
	bootstrap:    [ AppComponent ]
})
export class AppModule { }

const platform = platformBrowserDynamic();

platform.bootstrapModule(AppModule);