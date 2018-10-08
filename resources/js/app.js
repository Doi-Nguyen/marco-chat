
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// require firebase
window.VueFire = require('vuefire');
window.FireBase = require('firebase');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

var config = {
    apiKey: "AIzaSyCuCy_Zsyz55t5u_OFksDccO2OkrOoGT9o",
    authDomain: "app-chat-59eb3.firebaseapp.com",
    databaseURL: "https://app-chat-59eb3.firebaseio.com",
    storageBucket: "app-chat-59eb3.appspot.com"
};
FireBase.initializeApp(config);
var database = FireBase.database();
const app = new Vue({
    el: '#app'
});
