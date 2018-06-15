<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</template>

<script>
    import LineChart from './LineChart'

    export default {
        comments: {
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
                axios.get('/vue-start/data-chart').then((response) => {
                    this.urldata = response.data;
                })
            }
        }
    }
</script>
