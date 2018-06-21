<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row form-group">
                    <div class="col-sm-4">
                        <select multiple="" class="form-control" v-model="usersSelect">
                            <option v-for="user in users" :value="'news-action.' + user.id">{{user.email}}</option>
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <textarea class="form-control" readonly="" rows="6">{{dataMessages.join('\n')}}</textarea>
                    </div>
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
                message: "",
                usersSelect: []
            }
        },
        props: [
            'users',
            'user'
        ],
        created() {
            var socket = io("http://localhost:3000");

            socket.on("news-action." + this.user.id + ":App\\Events\\PrivateMessage", function (data) {
                this.dataMessages.push(data.message.user + ': ' + data.message.message);
            }.bind(this));
            socket.on("news-action.:App\\Events\\PrivateMessage", function (data) {
                this.dataMessages.push(data.message.user + ': ' + data.message.message);
            }.bind(this));
        },
        methods: {
            sendMessage() {
                if (!this.usersSelect.length)
                    this.usersSelect.push('new-action.');

                axios({
                    method: 'get',
                    url: '/vue-start/send-private-message',
                    params: {
                        channels: this.usersSelect,
                        message: this.message,
                        user: this.user.email
                    }
                }).then((response) => {
                    this.dataMessages.push(this.user.email + ': ' + this.message);
                    this.message = "";
                })
            }
        }
    }
</script>
