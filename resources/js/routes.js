import Vue from "vue";
import VueRouter from "vue-router";

const foo = {template: "<v-alert>Foo</v-alert>"};
const error = {template: "<v-alert>error</v-alert>"};
/* user = {template: "<v-alert type='danger'>user {{$route.params.name}}</v-alert>"};*/

Vue.use(VueRouter);

const routes = [
    {path: '/foo', components: 'foo'},
    {path: '/error', components: 'error'},
    {path: '/user/:name', components: 'user'},
];

export default new VueRouter({
    router: routes
})
