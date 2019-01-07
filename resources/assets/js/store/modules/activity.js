import http from '../../services/http';
import types from '../mutation-types';

const state = {
  activityData: [],
  isLoading: true
}

const actions = {
    fetchAllData({ commit }) {
        http.get('getevent', res => {
            commit(types.GET_ACTIVITY, res.data);
        }, null);
    },
};

const mutations = {
    [types.GET_ACTIVITY](state, payload) {
        state.isLoading = false;
        Object.assign(state, { activityData: payload })
    }
};

const getters = {
    activityData: (state, getters, rootState) => state.activityData,
    isLoading: (state, getters, rootState) => state.isLoading,
    fetchIndividualActivityData: (state, getters, rootState) => {
        const activityId = Number(rootState.route.params.id);
        return getters.activityData.find(activity => activity.activity_id === activityId);
    },
    filterCategoryActivityData: (state, getters, rootState) => (id) => {
        return getters.activityData.filter(activity => activity.category_id === id);
    }
};

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};