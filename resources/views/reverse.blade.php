<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            outline: none;
            border: none;
            box-sizing: border-box;
        }

        body {
            background: #34495e;
        }

        .app-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 10rem auto;
            color: #fff;
        }

        .app-wrapper p {
            font-size: 2em;
        }

        .app-wrapper input {
            padding: 5px 10px;
            margin-top: 10px;
            font-size: 1em;
            border-radius: 2px;
        }

        .app-wrapper button {
            background: #3498db;
            color: #fff;
            text-transform: uppercase;
            cursor: pointer;
            font-size: 1em;
            letter-spacing: 0.2em;
            margin-top: 10px;
            padding: 10px;
            border-radius: 2px;
        }

        .app-wrapper button:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
<div id="app" class="app-wrapper">
    <p>@{{ message }}</p>
    <input type="text" placeholder="enter text" v-model="message">
    <button @click="reverseMessage">Reverse</button>
</div>
</body>
<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="{{asset('js/reverse.js')}}"></script>
</html>