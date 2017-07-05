/// <reference path="../../../../../typings/modules/angular/index.d.ts"/>
import * as ng from 'angular'

/**
 * Created by ivan on 6/20/17.
 */
export class HeaderController {
	slideMenuState: boolean = false;

	toggleMenu() {
		this.slideMenuState = !this.slideMenuState;
	}

	setState(state: boolean) {
		this.slideMenuState = state;
	}

	constructor()
	{
	}
}

