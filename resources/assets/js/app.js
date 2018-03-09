
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

Vue.component('sg-sidenav', require('./components/_navContent.vue'));

new Vue({
    el: '#sidebar'
});

Vue.component('sg-maincontent', require('./components/_homeContent.vue'));

new Vue({
	el: '#mainContent'
});

Vue.component('sg-topnav', require('./components/_topNav.vue'));
new Vue({
	el: '#sgtopnav'
});