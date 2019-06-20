import {fetchLogin} from "../data/api";
import {getToken, removeToken, saveToken} from "../data/localStorage";
import router from '../router';

const state = {
    isLoggedIn: !!getToken(),
    pending: false,
    showPassword: false,
    password: '',
    username: ''
};

// getters
const getters = {
    isLoggedIn: state => {
        return state.isLoggedIn
    }
};

// actions
const actions = {

    login({commit}) {
        commit('login');
        // fetchLogin().then(jsonResponse => {
        //     saveToken(jsonResponse.headers.authorization);
            commit('loginSuccess');
            router.push('/')
        // });
    },
    logout({commit}) {
        commit('logout');
        removeToken();
        router.push('/login')
    }
};

// mutations
const mutations = {
    ['login'](state) {
        state.pending = true;
    },
    ['loginSuccess'](state) {
        state.isLoggedIn = true;
        state.pending = false;
    },
    ['logout'](state) {
        state.isLoggedIn = false;
    },
    ['setUsername'](state, username) {
        state.username = username;
    },
    ['setPassword'](state, password) {
        state.password = password;
    },
    ['togglePassword'](state) {
        state.showPassword = !state.showPassword;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
