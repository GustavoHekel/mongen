const state = {
    jobsCount: null
}

const mutations = {
    'JOBS_SET_JOBS_COUNT' (state, jobs) {
        state.jobsCount = jobs.length
    },
    'JOBS_INCREMENT_JOB_COUNT' (state) {
        state.jobsCount++
    },
    'JOBS_DECREMENT_JOB_COUNT' (state) {
        state.jobsCount--
    }
}

const actions = {
    setJobsCounter ({ commit }, jobs) {
        commit('JOBS_SET_JOBS_COUNT', jobs)
    },
    incrementJobsCount({ commit }) {
        commit('JOBS_INCREMENT_JOB_COUNT')
    },
    decrementJobsCount({ commit }) {
        commit('JOBS_DECREMENT_JOB_COUNT')
    }
}

const getters = {
    jobsCount (state) {
        return state.jobsCount
    }
}

export default {
    state,
    mutations,
    actions,
    getters
}
