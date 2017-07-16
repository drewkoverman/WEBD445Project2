
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.moment = require('moment');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('navigation', require('./components/Navigation.vue'));
Vue.component('hero', require('./components/Hero.vue'));
Vue.component('orders', require('./components/Orders.vue'));
Vue.component('framework', require('./components/Framework.vue'));
Vue.component('footer-component', require('./components/Footer.vue'));

const app = new Vue({
    el: '#app'
});
