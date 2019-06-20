import {convertDateToJalali} from "../data/convertors";

const state = {
    tripLabels: [],
    tripValues: [],
    customerLabels: [],
    customerValues: [],
    driverLabels: [],
    driverValues: [],
    daysCount: 10,
    isLoading: true
};

// getters
const getters = {};

// actions
const actions = {
    chartsData({commit}) {
        commit('isLoading');
        // fetchChartsCountByDate().then(jsonResponse => {
        //     const data = jsonResponse.data.data;
        //     const trips = data.trips;
        //     const customers = data.customers;
        //     const drivers = data.drivers;

            const tripLabels = ['1398/1/1','1398/1/2','1398/1/3'];
            const tripValues = [3,6,8];
            const customerLabels = ['1398/1/1','1398/1/2','1398/1/3'];
            const customerValues = [8,3,5];
            const driverLabels = ['1398/1/1','1398/1/2','1398/1/3'];
            const driverValues = [6,2,4];

            const payload = {tripLabels,tripValues,customerLabels,customerValues,driverLabels,driverValues};

            commit('setChartsData',payload);

            commit('loaded');

        // }).catch(e => console.log(e))
    }
};

// mutations
const mutations = {
    ['isLoading'](state) {
        state.isLoading = true;
    },
    ['loaded'](state) {
        state.isLoading = false;
    },
    ['setChartsData'](state, {tripLabels,tripValues,customerLabels,customerValues,driverLabels,driverValues}) {
        state.tripLabels = tripLabels;
        state.tripValues = tripValues;
        state.customerLabels = customerLabels;
        state.customerValues = customerValues;
        state.driverLabels = driverLabels;
        state.driverValues = driverValues;
    },

};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
