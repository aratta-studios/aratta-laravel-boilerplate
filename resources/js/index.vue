<template>
    <v-app  id="inspire">
            <router-view></router-view>
    </v-app>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
