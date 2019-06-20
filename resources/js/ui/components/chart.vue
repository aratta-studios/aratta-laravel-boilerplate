<template>
    <v-card v-bind:class="margin" v-bind:width="width">

        <v-card-title primary-title>
            <v-layout column>
                <h5>
                    {{title}}
                </h5>
            </v-layout>
            <chartist
                    :data="{
                    labels:labels,
                    series:[values]
                    }"
                    :options="chartOptions"
                    :type="type"
                    :ratio="ratio"
            >
            </chartist>
        </v-card-title>

    </v-card>
</template>

<script>
    export default {
        name: "chart",
        props: ["title", "ratio", "width", "type", "margin", "values", "labels", 'max'],
        data: function () {
            return {
                chartOptions: {}
            }
        },
        mounted: function () {
            this.chartOptions = {
                low: 0,
                onlyInteger: true,
                chartPadding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
                divisor: 1,
                lineSmooth: this.$chartist.Interpolation.cardinal({
                    tension: 5
                })
            }
        },
        events: [{
            event: 'draw',
            fn: data => {
                if (data.type === 'line' || data.type === 'area') {
                    data.element.animate({
                        d: {
                            begin: 2000 * data.accounting,
                            dur: 2000,
                            from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                            to: data.path.clone().stringify(),
                            easing: Chartist.Svg.Easing.easeOutQuint
                        }
                    });
                }
            }
        }]
    }
</script>
