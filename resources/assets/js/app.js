
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

Vue.component('top-menu', require('./components/Header/Menu.vue'));
Vue.component('reservation-form', require('./components/Reservation/ReservationForm.vue'));
Vue.component('better-experience', require('./components/Experience/BetterExperience.vue'));
Vue.component('explore-products', require('./components/Products/Products.vue'));
Vue.component('offer-packages', require('./components/OfferAndPackages/OfferPackages.vue'));
Vue.component('home-deal', require('./components/DreamHome/Deal.vue'));
Vue.component('news-articles', require('./components/NewsAndArticles/NewsArticles.vue'));
Vue.component('footer-component', require('./components/Footer/Footer.vue'));

const app = new Vue({
    el: '#app'
});
