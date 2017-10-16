/// <reference path="../../../../../typings/modules/angular/index.d.ts"/>
import * as ng from 'angular'

import { ICart } from "./cart";

/**
 * Created by ivan on 6/20/17.
 */
export class SiteController implements angular.IController
{
	slideMenuState: boolean = false;
	cart: ICart;

	public getCart() : ICart
	{
		return this.cart;
	}

	toggleMenu()
	{
		this.slideMenuState = !this.slideMenuState;
	}

	setMenuState(state: boolean)
	{
		this.slideMenuState = state;
	}

	scrollBodyTo(selector: string)
	{
		jQuery('html, body').animate({
			scrollTop: jQuery(selector).offset().top - 50
		}, 500);
	}
}

