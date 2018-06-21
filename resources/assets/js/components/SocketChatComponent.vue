<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control" readonly="" rows="6">{{dataMessages.join('\n')}}</textarea>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Naberi text" v-model="message">
                    <div class="input-group-append">
                        <button @click="sendMessage" class="btn btn-outline-secondary" type="button">Otpravit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {

        data: function () {
            return {
                dataMessages: [],
                message: ""
            }
        },
        mounted() {
            var socket = io("http://localhost:3000");

            socket.on("news-action:App\\Events\\NewMessage", function (data) {
                this.dataMessages.push(data.message);
            }.bind(this));

        },
        methods: {
            sendMessage() {
                axios({
                    method: 'get',
                    url: '/vue-start/send-message',
                    params: {
                        message: this.message,
                    }
                }).then((response) => {
                    this.message = "";
                })
            }
        }
    }
</script>
