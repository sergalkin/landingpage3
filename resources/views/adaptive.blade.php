<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        @import url("https://fonts.googleapis.com/icon?family=Material+Icons");

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        nav {
            background: #585555;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            width: 100%;
            height: 60px;
        }

        ul {
            align-self: flex-start;
            background: #eee;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 60px;
            width: 100%;
        }

        li {
            align-items: center;
            color: #000;
            cursor: pointer;
            display: flex;
            font-size: 1.5em;
            height: 2em;
            justify-content: center;
            list-style-type: none;
            text-transform: uppercase;
            transition: all .3s ease;
        }

        li:hover {
            border-color: #585555;
            color: #AFFFEA;
        }

        #app {
            align-items: center;
            display: flex;
            flex-direction: column;
            width: 500px;
            height: 850px;
        }

        @media (max-width: 1024px) {
            #app {
                width: 100vh;
                height: 100vh;
            }
        }

        .fade-enter-active,
        .fade-leave-active {
            transition: opacity .3s ease;
        }

        .fade-enter,
        .fade-leave-to {
            opacity: 0;
        }

        .menu, .clear {
            cursor: pointer;
            font-size: 3em;
            padding-left: 5%;
            transition: all .3s ease;
            width: 1.5em;
            color: #fff;
        }
    </style>
</head>
<body>
<div id="app">
    <div class="container">
        <nav>
            <transition name="fade" mode="out-in">
                <i class="material-icons menu" v-if="!show" @click="show = !show" key="menu">menu</i>
                <i class="material-icons clear" v-else @click="show = !show" key="clear">clear</i>
            </transition>
            <transition name="fade">
                <ul v-if="show">
                    <li v-for="item in items">@{{ item }}</li>
                </ul>
            </transition>
        </nav>

    </div>
</div>
</body>
<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
<script src="{{asset('js/adaptive.js')}}"></script>
</html>