import { Component, ViewChild } from '@angular/core';
import { InterfaceDirective } from '../interface/interface.directive';
import { Restangular } from 'ng2-restangular';
/**
 * Created by ivan on 7/10/17.
 */

@Component({
	selector: 'ng-pages',
	templateUrl: '/admin/templates/pages/list.html',
})
export class PageComponent {
	constructor(public restangular: Restangular) {}

	public pages: any;
	public currentPage: string;

	@ViewChild('start') start;
	@ViewChild( InterfaceDirective ) directive: InterfaceDirective;
	public loadPage(pageId: any)
	{
		this.restangular.one('pageFields', pageId).get().subscribe( pageFields => {
			//console.log(pageFields);
			this.directive.updateInterface(pageFields);
		});
	}

	ngOnInit() {
		this.currentPage = 'Плейсхолдер';
		// GET /admin/api/users/1
		this.restangular.all('page').getList().subscribe( pages => {
			this.pages = pages;
		});
	}
}