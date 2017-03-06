const state = {
    studiesCount: null
}

const mutations = {
    'STUDIES_SET_STUDIES_COUNT' (state, studies) {
        state.studiesCount = studies.length
    },
    'STUDIES_INCREMENT_STUDIES_COUNT' (state) {
        state.studiesCount++
    },
    'STUDIES_DECREMENT_STUDIES_COUNT' (state) {
        state.studiesCount--
    }
}

const actions = {
    setStudiesCounter ({ commit }, studies) {
        commit('STUDIES_SET_STUDIES_COUNT', studies)
    },
    incrementStudiesCount({ commit }) {
        commit('STUDIES_INCREMENT_STUDIES_COUNT')
    },
    decrementStudiesCount({ commit }) {
        commit('STUDIES_DECREMENT_STUDIES_COUNT')
    }
}

const getters = {
    studiesCount (state) {
        return state.studiesCount
    }
}

export default {
    state,
    mutations,
    actions,
    getters
}
