/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import Vue from 'vue'
import VueMaterial from 'vue-material'

Vue.use(VueMaterial)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('another-component', require('./components/AnotherComponent.vue').default);

Vue.component('addcourse-component', require('./components/AddcourseComponent.vue').default);

Vue.component('resources-component', require('./components/ResourcesComponent.vue').default);

Vue.component('numberspinner-component', require('./components/NumberInputSpinner.vue').default);

Vue.component('allclassescard-component', require('./components/AllclassescardComponent.vue').default);

Vue.component('addcourseform-component', require('./components/AddcourseformComponent.vue').default);

Vue.component('allaccountstable-component', require('./components/AllaccountstableComponent.vue').default);

Vue.component('autocomplete-component', require('./components/AutocompleteComponent.vue').default);

Vue.component('singleaccount-component', require('./components/SingleaccountComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
