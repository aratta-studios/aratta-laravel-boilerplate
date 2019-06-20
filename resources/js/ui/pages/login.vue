<template>
    <v-layout align-center justify-center>
        <v-card>
            <v-card-title primary-title>
                <v-layout column>
                    <v-img height="250px" width="250px" style="border-radius: 50%;"
                           src="https://avatars1.githubusercontent.com/u/52023818">
                        <template v-slot:placeholder>
                            <v-layout
                                    fill-height
                                    align-center
                                    justify-center
                                    ma-0
                            >
                                <v-progress-circular indeterminate color="black darken-5"></v-progress-circular>
                            </v-layout>
                        </template>
                    </v-img>
                    <v-form
                            ref="form"
                            lazy-validation
                            id="login_form"
                            method="POST"
                            @submit.prevent="login"
                    >

                        <v-text-field
                                :value="username"
                                label="Username"
                                required
                                text-align="right"
                                name="username"
                                @input="setUsername"
                                data-vv-name="username"

                        ></v-text-field>

                        <v-text-field
                                :value="password"
                                :type="showPassword ? 'text' : 'password'"
                                :append-icon="showPassword ? 'visibility' : 'visibility_off'"
                                label="Password"
                                required
                                data-vv-name="password"
                                name="password"
                                @input="setPassword"
                                text-align="right"
                                @click:append="togglePassword"
                        ></v-text-field>

                        <v-btn
                                fill-width
                                color="success"
                                type="submit"
                        >
                            <v-progress-circular v-show="this.pending === true" indeterminate
                                                 color="white"></v-progress-circular>
                            <div v-show="this.pending === false">Login</div>
                        </v-btn>
                    </v-form>

                </v-layout>
            </v-card-title>
        </v-card>
    </v-layout>
</template>

<script>
    import {mapActions, mapMutations, mapState} from "vuex";
    import router from '../../router';

    export default {
        name: "login",
        methods: {
            ...mapMutations({
                setUsername: 'login/setUsername',
                setPassword: 'login/setPassword',
                togglePassword: 'login/togglePassword'
            }),
            ...mapActions({
                login: 'login/login'
            }),
        },
        computed: {
            ...mapState({
                isLoggedIn: state => state.login.isLoggedIn,
                pending: state => state.login.pending,
                showPassword: state => state.login.showPassword,
                password: state => state.login.password,
                username: state => state.login.username

            })
        }
    }
</script>

<style scoped>

</style>
