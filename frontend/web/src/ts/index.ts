import * as angular from 'angular';
import 'angular-route';
import 'angular-touch';


import { ReservationFormController } from './controllers/reservation_form';
import { SiteController } from './controllers/site';
import { HoverDirective } from './directives/hover';


export default angular
	.module('main', ['ngRoute', 'ngTouch'])
	.controller('ReservationFormController', ReservationFormController)
	.controller('SiteController', SiteController)
	.directive('hover', HoverDirective);


// Bootstrap the angular app module
//angular
//	.bootstrap(document.body, ['main']);
