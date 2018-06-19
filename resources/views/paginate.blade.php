<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doc</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        body {
            padding: 50px;
        }
    </style>
</head>
<body>

<div id="app" class="container">
    <ul class="list-group">
        <li v-for="item in collection" class="list-group-item">
            @{{ item }}
        </li>
    </ul>
    <hr>
    <div class="btn-toolbar">
        <div class="btn-group">
            <button class="btn btn-primary" v-for="p in pagination.pages" @click.prevent="setPage(p)">
                @{{ p }}
            </button>
        </div>
    </div>
    Displaying from indexes @{{ pagination.startIndex }} to @{{ pagination.endIndex }}
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
<script src="{{asset('/js/paginate.js')}}"></script>
</body>
</html>