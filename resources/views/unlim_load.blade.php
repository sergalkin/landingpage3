<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doc</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css);

        body {
            background-color: #3d3d3e;
            padding: 50px;
        }

        .container {
            padding: 40px 80px 15px 80px;
            background-color: #fff;
            border-radius: 8px;
            min-width: 800px;
        }

        .list-group-wrapper {
            position: relative;
        }

        .list-group {
            overflow: auto;
            height: 50vh;
            border: 2px solid #dce4ec;
            border-radius: 5px;
        }

        .list-group-item {
            margin-top: 1px;
            border-top: none;
            border-right: none;
            border-left: none;
            border-bottom: 2px solid #dce4ec;
        }

        .loading {
            text-align: center;
            position: absolute;
            color: #fff;
            z-index: 9;
            background: #5c4084;
            padding: 8px 18px;
            border-radius: 5px;
            left: calc(50% - 45px);
            top: calc(50% - 18px);
        }

        .fade-enter-active, .fade-leave-active {
            transition: opacity .5s;
        }

        .fade-enter, .fade-leave-to {
            opacity: 0;
        }
    </style>
</head>
<body>

<div id="app" class="container">
    <div class="list-group-wrapper">
        <transition name="fade">
            <div class="loading" v-show="loading">
                <span class="fa fa-spinner fa-spin"></span>Loading
            </div>
        </transition>
        <ul class="list-group" id="infinite-list">
            <li class="list-group-item" v-for="item in items" v-text="item"></li>
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    new Vue({
        el: "#app",
        data: {
            loading: false,
            nextItem: 1,
            items: []
        },
        mounted() {
            const listElm = document.querySelector('#infinite-list');
            listElm.addEventListener('scroll', e=> {
                if(listElm.scrollTop + listElm.clientHeight >= listElm.scrollHeight) {
                    this.loadMore();
                }
            });
            this.loadMore();
        },
        methods: {
            loadMore() {
                this.loading = true;
                setTimeout(e => {
                    for (var i = 0; i < 20; i++) {
                        this.items.push("Item " + this.nextItem++);
                    }
                    this.loading = false;
                }, 200)

            }
        }
    })
</script>
</body>
</html>