/**
 * Created by Иван on 01.06.2017.
 */

import { Component } from 'angular2/core';

@Component({
    selector: 'ng-app',
    template: `<h1>Hello {{name}}</h1>`
})
export class AppComponent { name = 'Angular'; }