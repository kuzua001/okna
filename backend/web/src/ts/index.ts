import { NgModule }  from '@angular/core';
import { Component } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { platformBrowserDynamic } from "@angular/platform-browser-dynamic";
import { RestangularModule } from 'ng2-restangular';
import { UsersModule } from './users/users.module'
import { PagesModule } from './pages/page.module'

@Component({
	selector: 'ng-app',
	templateUrl: '/admin/dynamic/index'
})
export class AppComponent { name = 'Angular'; }


@NgModule({
	imports: [
		BrowserModule,
		RestangularModule.forRoot((RestangularProvider) => {
			RestangularProvider.setBaseUrl('/admin/api/');
		}),
		UsersModule,
		PagesModule,
	],
	declarations: [ AppComponent ],
	bootstrap: [ AppComponent ]
})
export class AppModule { }

const platform = platformBrowserDynamic();

platform.bootstrapModule(AppModule);