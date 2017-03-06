import Vue from 'vue';
import Vuex from 'vuex';
import jobs from './modules/jobs'
import studies from './modules/studies'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        jobs,
        studies
    }
});
