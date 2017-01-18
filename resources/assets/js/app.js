import _ from 'lodash';
import BootstrapSass from 'bootstrap-sass';
import Vue from 'vue';
import VueResource from 'vue-resource';

Vue.use(VueResource);

import CvTableWithActions from './vue/components/mi-cv/CvTableWithActions.vue';
Vue.component('appCvTableWithActions', CvTableWithActions);

new Vue({
  el: '#app',
});
