@extends('layouts.app')

@section('content')
    {{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/6.2.1/adapter.min.js"></script>--}}
    {{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>--}}
    {{--<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>--}}
    {{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.min.css">--}}
    {{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.all.min.js"></script>--}}
    {{--<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->--}}
    {{--<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.min.js"></script>--}}

    <audio id="myAudio">
        <source src="https://meenkx.github.io/ScanPhachomchia61.github.io/scannerbeepSoundEffect.mp3" type="audio/mpeg">
        {{--<source src="scannerbeepSoundEffect.mp3" type="audio/mpeg">--}}
        {{--<source src="scannerbeepSoundEffect.wav" type="audio/mpeg">--}}
        <source src="https://meenkx.github.io/ScanPhachomchia61.github.io/scannerbeepSoundEffect.wav" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <scan-component></scan-component>
@endsection
