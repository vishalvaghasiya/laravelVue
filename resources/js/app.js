require('./bootstrap');
window.Vue = require('vue');
import VueRouter from "vue-router";
import Routes from "./routes";
import App from "./components/App";

/*Vue.component('example-try', require('./components/ExampleComponent.vue').default);*/     // global declaration
/*import ExampleComponent from "./components/ExampleComponent";*/   // local component declaration
/*import dashboard from "./components/pages/dashboard";*/


Vue.use(VueRouter);

const routesConst = new VueRouter({
    routes: Routes,
    mode: 'history',
    // mode: 'hash',
});

const app = new Vue({
    el: '#app',
    components: {
        /*'example-try': dashboard,*/
        'example-app': App
    },
    router: routesConst,
});
