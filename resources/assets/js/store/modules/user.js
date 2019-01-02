import http from '../../services/http';
import * as types from '../mutations-type';

const state = {
  user: {},
  authenticated: false,
}

const actions = {
  login({ commit }, payload) {
      http.post('authenticate', payload, res => {
        commit(types.AUTH_LOGIN, res.data);
      }, null);
  },
  logout({ commit }) {
    http.get('logout', () => {
      commit(types.AUTH_LOGOUT);
    }, null);
  },
  setCurrentUser ({ commit }) {
    http.get('me', res => {
      commit(types.SET_USER, res.data);
    }, null);
  }
};

const mutations = {
  [types.AUTH_LOGIN](state, payload) {
      this.state.user = payload.user;
      this.state.authenticated = true;
  },
  [types.AUTH_LOGOUT](state) {
      localStorage.removeItem('jwt-token');
      this.state.user = {};
      this.state.authenticated = false;    
  },
  [types.SET_USER](state, payload) {
      this.state.user = payload.user;
      this.state.authenticated = true;    
  }
};

const getters = {
  user: (state, getters, rootState) => rootState.user,
  isLoggedIn: (state, getters, rootState) => rootState.authenticated
};

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};

