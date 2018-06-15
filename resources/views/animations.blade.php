<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        .box {
            height: 100px;
            width: 130px;
            background: orange;
        }
        .newAnim-enter-active {
            animation: newAnim-in .5s;
        }

        .newAnim-leave-active {
            animation: newAnim-in .5s reverse;
        }

        @keyframes newAnim-in {
            0% {
                transform: scale(0);
            }
            50% {
                transform: scale(1.5);
            }
            100% {
                transform: scale(1;
            }
        }
    </style>
</head>
<body>
<div id="app">
    <div class="container">
        <button v-on:click="show = !show" class="btn btn-primary">Toggle</button>
        <transition name="newAnim">
            <div v-if="show" class="box"></div>
        </transition>
    </div>
</div>
</body>
<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="{{asset('js/anims.js')}}"></script>
</html>