/*require('./bootstrap');*/
window.Vue = require('vue');
import vuetify from "./vuetify";
import routes from "./routes";

// Local Veriable
import Example from "./components/ExampleComponent";
// Global Veriable
/*Vue.component('example-component', require('./components/ExampleComponent.vue').default);*/

new Vue({
    el: '#app',
    router: routes,
    vuetify,
    components: {
        'example-component': Example,
    }
});
