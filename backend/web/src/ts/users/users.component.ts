import { Component  } from '@angular/core';
import { Restangular } from 'ng2-restangular';
/**
 * Created by ivan on 7/10/17.
 */

@Component({
	selector: 'ng-users',
	templateUrl: '/admin/templates/users/list.html'
})
export class UsersComponent {
	constructor(public restangular: Restangular) {}

	public users;

	public edit(id: number) {
		alert(id);
	}

	ngOnInit() {
		// GET /admin/api/users/1
		this.restangular.all('users').getList().subscribe( users => {
			this.users = users;
			console.log(users);
		});
	}
}