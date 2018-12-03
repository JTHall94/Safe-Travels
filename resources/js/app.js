
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
Vue.component('g-map', require('./components/GMap.vue'));
Vue.component('g-map-display', require('./components/GMapDisplay.vue'));
Vue.component('g-map-edit', require('./components/GMapEdit.vue'));

import Vue from 'vue'
import Datetime from 'vue-datetime'
import * as VueGoogleMaps from 'vue2-google-maps'
// You need a specific loader for CSS files
import 'vue-datetime/dist/vue-datetime.css'

Vue.use(VueGoogleMaps, {
  load: {
    key: process.env.MIX_GOOGLE_API_KEY,
    //libraries: 'places', // This is required if you use the Autocomplete plugin
    // OR: libraries: 'places,drawing'
    // OR: libraries: 'places,drawing,visualization'
    // (as you require)

    //// If you want to set the version, you can do so:
    // v: '3.26',
  },

  //// If you intend to programmatically custom event listener code
  //// (e.g. `this.$refs.gmap.$on('zoom_changed', someFunc)`)
  //// instead of going through Vue templates (e.g. `<GmapMap @zoom_changed="someFunc">`)
  //// you might need to turn this on.
  // autobindAllEvents: false,

  //// If you want to manually install components, e.g.
  //// import {GmapMarker} from 'vue2-google-maps/src/components/marker'
  //// Vue.component('GmapMarker', GmapMarker)
  //// then disable the following:
  // installComponents: true,
})

Vue.use(Datetime)

const app = new Vue({
    el: '#app',

    data: {

    datetime: '',
  }
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
