<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <line-chart :chart-data="data" :height="100"
                            :options="{responsive: true, maintainAspectRatio: true}"></line-chart>
                <button class="btn btn-primary btn-xs text mt-1 mh-10" @click="update">Update</button>
            </div>
        </div>
    </div>
</template>

<script>
    import LineChart from './LineChart.js'

    export default {
        components: {
            LineChart
        },
        data: function () {
            return {
                data: [],
            }
        },
        mounted() {
            this.update();
        },
        methods: {
            update: function () {
                axios.get('/vue-start/random-chart').then((response) => {
                    this.data = response.data;
                })
            }
        }
    }
</script>
