<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>

    </style>
</head>
<body>
<div id="app">
    <div class="container">
        <header>
            <h1>@{{ title }}</h1>
        </header>
        <form action="#" class="form">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="itemForm" placeholder="add task">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" v-on:click="addItem">Add</button>
                </div>
            </div>
        </form>
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">Tasks</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item, index in items">
                <th scope="row">@{{ item.text }}
                    <button v-on:click="deleteItem(index)" class="btn btn-danger">X</button>
                </th>
            </tr>
            </tbody>
        </table>

    </div>
</div>
</body>
<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
<script src="{{asset('js/task.js')}}"></script>
</html>