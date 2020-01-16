
require('./bootstrap');
window.Vue = require('vue');

/*Vue.component('example-try', require('./components/ExampleComponent.vue').default);*/     // global declaration
/*import ExampleComponent from "./components/ExampleComponent";*/   // local component declaration

import dashboard from "./components/pages/dashboard";
import App from "./components/App";

const app = new Vue({
    el: '#app',
    components: {
        'example-try' : dashboard,
        'example-app' : App
    }
});
