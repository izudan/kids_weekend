
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
import VueProgressiveImage from 'vue-progressive-image';
import Datepicker from 'vuejs-datepicker';
import App from './App';
import { sync } from 'vuex-router-sync';
import store from './store/index';
import router from './router/router';

Vue.use(VueSlideoutPanel);
Vue.use(VueCarousel);
Vue.use(VueProgressiveImage, {
  blur: 30
})
sync(store, router);


/*
 * モーダルスライドはグローバルに設定
 */
import UserMenu from './components/SlideUserMenuPanel';
import LoginModal from './components/LoginModal';
Vue.component('UserMenu', UserMenu);
Vue.component('LoginModal', LoginModal);
Vue.component('Datepicker', Datepicker);

Vue.config.productionTip = false;

const app = new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app');
