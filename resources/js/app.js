
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('tagged-contacts', require('./components/TaggedContacts.vue'));

import Vue from 'vue'
import Datetime from 'vue-datetime'
// You need a specific loader for CSS files
import 'vue-datetime/dist/vue-datetime.css'

Vue.use(Datetime)

const app = new Vue({
    el: '#app'
});


window.check_checkbox = function(checkbox_id) {
    let checkbox = document.getElementById(checkbox_id);

    if (checkbox.attribute('checked')) {
        checkbox.setAttribute('checked', 'on');
    }
    else {
        checkbox.removeAttribute('checked');
    }
}
