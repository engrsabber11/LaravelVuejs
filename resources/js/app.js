
require('./bootstrap');

window.Vue = require('vue');
var moment = require('moment');

import VueRouter from 'vue-router'
Vue.use(VueRouter)
const router = new VueRouter({
  routes,
  mode:'history'
})

import Snotify, { SnotifyPosition } from 'vue-snotify'
const SnotifyOptions = {
    toast: {
        position: SnotifyPosition.rightTop
    }
}
Vue.use(Snotify, SnotifyOptions)

import {routes} from './routes'
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-main', require('./components/AdminMain.vue').default);
Vue.component('front-main', require('./components/FrontMain.vue').default);
Vue.component('pagination', require('./components/partial/PaginationComponent.vue').default);

//v-form
import { Form, HasError, AlertError } from 'vform'
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
window.Form = Form;

import storeData from './store/index'
import Vuex from 'vuex'
Vue.use(Vuex)
const store = new Vuex.Store({
  storeData
});

Vue.filter('myDate', function (created) {
  return moment(created).format('MMMM Do YYYY');
});

import VueProgressBar from 'vue-progressbar'
const VueProgressBarOptions = {
    color: '#3490dc',
    failedColor: '#87111d',
    thickness: '5px',
    transition: {
        speed: '0.2s',
        opacity: '0.6s',
        termination: 300
    },
    autoRevert: true,
    location: 'top',
    inverse: false
};
Vue.use(VueProgressBar, VueProgressBarOptions);



const app = new Vue({
    el: '#app',
    router,
    store
});
