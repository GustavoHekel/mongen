import _ from 'lodash';
import BootstrapSass from 'bootstrap-sass';
import Vue from 'vue';
import VueResource from 'vue-resource';
import store from './vue/store/store';

Vue.use(VueResource);
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('content');

import Jobs from './vue/components/mi-cv/Jobs.vue';
Vue.component('AppJobs', Jobs);

import Studies from './vue/components/mi-cv/Studies.vue';
Vue.component('AppStudies', Studies);

new Vue({
  el: '#app',
  store
});
