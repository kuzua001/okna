import * as angular from 'angular';
import 'angular-route';
import 'angular-touch';
import 'angular-carousel';
import 'slick';
import 'angular-slick-carousel';

import { ICart } from "./controllers/cart";


import { SiteController } from './controllers/site';
import { CartController } from './controllers/cart';


export default angular
	.module('main', ['ngRoute', 'ngTouch', 'angular-carousel', 'slickCarousel'])
	.controller('SiteController', ["$scope", ($scope) => {
		return new SiteController();
	}])
	.controller('CartController', ["$rootScope", ($rootScope) => new CartController($rootScope)]);


// Bootstrap the angular app module
//angular
//	.bootstrap(document.body, ['main']);
