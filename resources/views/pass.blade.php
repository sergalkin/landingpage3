<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doc</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>
</head>
<body>

<div id="app" class="container">
    <div class="form-group">
        <input type="password" class="form-control" v-model="password" v-show="!showPass">
        <input type="text" class="form-control" v-model="password" v-show="showPass">
        <button class="btn btn-primary" @click="showPass = !showPass">
            <span v-show="!showPass">Show password</span>
            <span v-show="showPass">Hide password</span>
        </button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    new Vue({
        el:"#app",
        data:{
            showPass: false,
            password: '1a2d3c'
        }
    })
</script>
</body>
</html>