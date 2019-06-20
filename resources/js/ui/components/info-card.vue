<template>

    <v-card>

        <v-card-title primary-title>

            <v-img height="400px" width="400px" v-bind:src="image">
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
            <v-layout column>
                <h3>
                    {{title}}
                </h3>
                <p>
                    {{description}}
                </p>
            </v-layout>
        </v-card-title>

    </v-card>
</template>

<script>
    export default {
        name: "info-card",
        props: ['title', 'image', 'description'],
        data: function () {
            return {
                state: 'default'
            }
        }

    }
</script>

<style scoped>

</style>
