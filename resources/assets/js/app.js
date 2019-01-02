
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import VueSlideoutPanel from 'vue2-slideout-panel';
import App from './App';
import { sync } from 'vuex-router-sync';
import store from './store/index';
import router from './router/router';

Vue.use(VueSlideoutPanel);
sync(store, router);

Vue.config.productionTip = false;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('the-header', require('./components/TheHeader.vue'));
Vue.component('the-footer', require('./components/TheFooter.vue'));
Vue.component('radius-menu', require('./components/RadiusMenu.vue'));
Vue.component('register-modal', require('./components/RegisterModal.vue'));
Vue.component('login-modal', require('./components/LoginModal.vue'));
Vue.component('logout-modal', require('./components/LogoutModal.vue'));
Vue.component('search', require('./components/SlideSearchPanel.vue'));
Vue.component('navMenu', require('./components/SlideNavMenuPanel.vue'));

const app = new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app');



// Leaflet 
// import { L, LMap, LTileLayer, LMarker } from 'vue2-leaflet';
// import 'leaflet/dist/leaflet.css';
// Vue.component('l-map', LMap);
// Vue.component('l-tile-layer', LTileLayer);
// Vue.component('l-marker', LMarker);
// delete L.Icon.Default.prototype._getIconUrl;

// L.Icon.Default.mergeOptions({
//   iconRetinaUrl: require('leaflet/dist/images/marker-icon-2x.png'),
//   iconUrl: require('leaflet/dist/images/marker-icon.png'),
//   shadowUrl: require('leaflet/dist/images/marker-shadow.png')
// });