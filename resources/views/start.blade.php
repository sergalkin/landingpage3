<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>

    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app">
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="min-height: 720px">
                    <h2 class="text-center">Example component</h2>
                    <example-component></example-component>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="min-height: 720px">
                    <h2 class="text-center">Передача данных в Vue из Blade</h2>
                    <prop-component :urldata="{{json_encode($url_data)}}"></prop-component>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="min-height: 720px">
                    <h2 class="text-center">Ajax</h2>
                    <ajax-component></ajax-component>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="min-height: 720px">
                    <h2 class="text-center">Chartline</h2>
                    <chartline-component></chartline-component>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="min-height: 720px">
                    <h2 class="text-center">ChartPie</h2>
                    <chartpie-component></chartpie-component>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="min-height: 720px">
                    <h2 class="text-center">ChartRandom</h2>
                    <chartrandom-component></chartrandom-component>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="min-height: 720px">
                    <h2 class="text-center">Realtime chart(line)</h2>
                    <socket-component></socket-component>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="min-height: 720px">
                    <h2 class="text-center">Realtime chart(line)</h2>
                    <socket-chat-component></socket-chat-component>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="min-height: 720px">
                    <h2 class="text-center">Realtime chart(line)</h2>
                    <h4 class="text-center">User: {{Auth::user()->email}}</h4>
                    @if(Auth::check())
                        <socket-private-component
                                :users="{{ \App\User::select('email', 'id')->where('id', '!=', Auth::id())->get() }}"
                                :user="{{Auth::user()}}"></socket-private-component>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="{{asset('js/app.js')}}"></script>

</html>
<script>
    import ChartlineComponent from "../assets/js/components/ChartlineComponent";

    export default {
        components: {ChartlineComponent}
    }
</script>
<script>
    import SocketChatComponent from "../assets/js/components/SocketChatComponent";

    export default {
        components: {SocketChatComponent}
    }
</script>