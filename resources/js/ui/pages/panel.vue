<template>
    <v-app id="inspire">
        <v-layout class="fill-height">
            <Drawer @logout="logout"></Drawer>
            <v-layout >
                <router-view></router-view>
            </v-layout>
        </v-layout>
    </v-app>
</template>

<script>
    import Drawer from "../components/drawer";
    import {mapActions} from "vuex";

    export default {
        name: "panel",
        components: {Drawer},
        methods: {
            ...mapActions({
                logout: 'login/logout'
            })
        }
    }
</script>
