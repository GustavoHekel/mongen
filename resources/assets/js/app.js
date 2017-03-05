import _ from 'lodash';
import BootstrapSass from 'bootstrap-sass';
import Vue from 'vue';
import VueResource from 'vue-resource';

Vue.use(VueResource);
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('content');

import Trabajos from './vue/components/mi-cv/Trabajos.vue';
Vue.component('AppTrabajos', Trabajos);

new Vue({
  el: '#app',
});
