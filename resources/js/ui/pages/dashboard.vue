<template>
    <v-container>
        <v-layout v-show="isLoading === false" align-center justify-center row>
            <Chart :max="Math.max.apply(Math,tripValues)" :isLoading="isLoading" :labels="tripLabels" :values="tripValues" width="1000px" type="Line" title="Trips"
                   ratio="ct-major-tenth"></Chart>
        </v-layout>
        <v-layout v-show="isLoading === false" align-center justify-center class="mt-3" row>
            <Chart :max="Math.max.apply(Math,customerValues)" :isLoading="isLoading" :labels="customerLabels" :values="customerValues" margin="mr-2" width="492px" type="Bar"
                   title="Customers" ratio="ct-major-fifth"></Chart>
            <Chart :max="Math.max.apply(Math,driverValues)" :isLoading="isLoading" :labels="driverLabels" :values="driverValues" margin="ml-2" width="492px" type="Bar"
                   title="Drivers" ratio="ct-major-fifth"></Chart>
        </v-layout>

        <v-layout v-show="isLoading === true" align-center justify-center row>
            <v-progress-circular v-show="isLoading === true" indeterminate color="primary"></v-progress-circular>
        </v-layout>
    </v-container>
</template>

<script>
    import Chart from '../components/chart'
    import {mapActions, mapMutations, mapState} from "vuex";

    export default {
        name: "dashboard",
        components: {Chart},
        computed: {
            ...mapState({
                tripLabels: state => state.dashboard.tripLabels,
                tripValues: state => state.dashboard.tripValues,
                customerLabels: state => state.dashboard.customerLabels,
                customerValues: state => state.dashboard.customerValues,
                driverLabels: state => state.dashboard.driverLabels,
                driverValues: state => state.dashboard.driverValues,
                isLoading: state => state.dashboard.isLoading,
            })
        },
        methods: {
            ...mapActions({
                chartsData: 'dashboard/chartsData'
            }),
        },
        mounted() {
            this.chartsData()
        }
    }

</script>