
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

import Menus from './components/Menus'
import Carousel from './components/Carousel'
import Gallery from './views/Gallery'
import About from './views/About'

const app = new Vue({
    el: '#app',
    components: {
        Menus,
        Carousel,
        Gallery,
        About
    }
});
