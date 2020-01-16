/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');
window.Vue = require('vue');

/*Vue.component('example-try', require('./components/ExampleComponent.vue').default);*/     // global declaration
/*import ExampleComponent from "./components/ExampleComponent";*/   // local component declaration

import dashboard from "./components/pages/dashboard";

const app = new Vue({
    el: '#app',
    components: {
        'example-try' : dashboard
    }
});
