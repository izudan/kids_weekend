
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


/** 
 *  import vue-packages and vue main files
 */
import Vue from 'vue';
import VueSlideoutPanel from 'vue2-slideout-panel';
import VueCarousel from 'vue-carousel';
import App from './App';
import { sync } from 'vuex-router-sync';
import store from './store/index';
import router from './router/router';

Vue.use(VueSlideoutPanel);
Vue.use(VueCarousel);
sync(store, router);

Vue.config.productionTip = false;

/** 
 *  import components as global components
 */
import TheHeader from './components/TheHeader.vue';
import TheFooter from './components/TheFooter.vue';
import RadiusMenu from './components/RadiusMenu.vue';
import RegisterModal from './components/RegisterModal.vue';
import LoginModal from './components/LoginModal.vue';
import LogoutModal from './components/LogoutModal.vue';
import SlideSearchPanel from './components/SlideSearchPanel.vue';
import SlideNavMenuPanel from './components/SlideNavMenuPanel.vue';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('the-header', TheHeader);
Vue.component('the-footer', TheFooter);
Vue.component('radius-menu', RadiusMenu);
Vue.component('register-modal', RegisterModal);
Vue.component('login-modal', LoginModal);
Vue.component('logout-modal', LogoutModal);
Vue.component('search', SlideSearchPanel);
Vue.component('navMenu', SlideNavMenuPanel);

const app = new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app');
