<template>
    <div class="container">
        <div class="row">
            <button class="btn btn-primary text mb-1" @click="update" v-if="!is_refresh"> Обновить - {{id}}</button>
            <span class="badge badge-primary mb-1" v-else>Обновление</span>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Наименование</th>
                        <th>URL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="url in urldata">
                        <td>{{url.title}}</td>
                        <td>{{url.url}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                urldata: [],
                is_refresh: false,
                id: 0
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.update();
        },
        methods: {
            update: function () {
                this.is_refresh = true;
                axios.get('/vue-start/get-json').then((response) => {
                    this.urldata = response.data;
                    this.is_refresh = false;
                    this.id++;
                })
            }
        }
    }
</script>
