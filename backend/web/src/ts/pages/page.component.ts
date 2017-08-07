import { Component  } from '@angular/core';
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


	public loadPage(id: number)
	{

	}

	ngOnInit() {
		this.currentPage = 'Плейсхолдер';
		// GET /admin/api/users/1
		this.restangular.all('page').getList().subscribe( pages => {
			this.pages = pages;
		});
	}
}