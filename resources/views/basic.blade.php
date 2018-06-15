<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        .large {
            font-size: 50px;
        }
    </style>
</head>
<body>
<div id="app">
    <div class="container">
        <div class="col">
            <h1 v-if="view" v-text="message"></h1>
            <h1 v-else>False</h1>

            <input type="text" v-model="message1">
            <h1> @{{ message1 }}</h1>
            <input type="checkbox" id="checkbox" v-model="checked">
            <label for="checkbox"> @{{ checked }}</label>
            <h1 v-pre> @{{ False Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, quos. }}</h1>
        </div>
        <div class="col">
            <h1>App</h1>
            <h1>@{{ count }}</h1>
            <button v-on:click="countUp" class="btn btn-success"> + 1</button>
            <button @click="countDown" class="btn btn-warning"> - 1</button>
        </div>
        <div class="col">
            <h1> URL: <a v-bind:href="url"> @{{ cleanUrl }}</a></h1>
            <input type="text" class="form-control" v-model="url">
            <button @click="cleanerUrl" class="btn btn-primary"> Clean Url</button>
        </div>
        <div class="col">
            <h1>@{{ title }}</h1>
            <button v-bind:class="[sizeToggle ? 'large' : '', {'rounded': isRounded}]"
                    v-bind:style="styles"
                    v-bind:disabled="disabled">START
            </button>
            <ul>
                <li><input type="checkbox" v-model="sizeToggle"><label for="">Увеличить шрифт</label></li>
                <li><input type="checkbox" v-model="isRounded"><label for="">Округлить</label></li>
                <li><input type="checkbox" v-model="disabled"><label for="">Disable</label></li>

                <li><input type="text" v-model="fontColor"><label for="">fontColor</label></li>
                <li><input type="text" v-model="backgroundColor"><label for="">backgroundColor</label></li>
            </ul>
        </div>
    </div>
</div>
</body>
<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="{{asset('/js/scriptBasics.js')}}"></script>
</html>