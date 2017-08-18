import * as angular from 'angular';
import 'angular-route';
import 'angular-touch';
import 'angular-carousel';


import { ReservationFormController } from './controllers/reservation_form';
import { SiteController } from './controllers/site';
import { CartController } from './controllers/cart';


export default angular
	.module('main', ['ngRoute', 'ngTouch', 'angular-carousel'])
	.controller('ReservationFormController', ReservationFormController)
	.controller('SiteController', SiteController)
	.controller('CartController', ["$rootScope", ($rootScope) => new CartController($rootScope)]);


// Bootstrap the angular app module
//angular
//	.bootstrap(document.body, ['main']);
