import { Component, ViewChild } from '@angular/core';
import { InterfaceDirective } from '../interface/interface.directive';
import { Restangular } from 'ng2-restangular';
/**
 * Created by ivan on 7/10/17.
 */

@Component({
	selector: 'ng-pages',
	templateUrl: `/admin/templates/pages/list.html?v=${new Date().getTime()}`,
})
export class PageComponent {
	constructor(public restangular: Restangular) {}

	public pages: any;
	public currentPage: string;

	private pageId: number;

	@ViewChild('start') start;
	@ViewChild( InterfaceDirective ) directive: InterfaceDirective;
	public loadPage(pageId: any)
	{
		this.pageId = pageId;
		this.restangular.one('pageFields', pageId).get().subscribe( pageFields => {
			//console.log(pageFields);
			this.directive.updateInterface(pageFields);
		});
	}

	public savePage() {
		let values = this.directive.readInterfaceValues();
		this.restangular.one('page').customPOST({
			id : this.pageId,
			data : values
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