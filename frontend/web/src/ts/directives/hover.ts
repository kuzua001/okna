/// <reference path="../../../../../typings/modules/angular/index.d.ts"/>
import * as ng from 'angular'

export const HoverDirective = () => (<ng.IDirective> {
	restrict: 'A',
	link($scope, $elem, $attrs) {

		$elem.bind('mouseover', function(e){
			$elem.addClass('hover');
		});

		$elem.bind('mouseleave', function(e){
			$elem.removeClass('hover');
		});
	}
});

