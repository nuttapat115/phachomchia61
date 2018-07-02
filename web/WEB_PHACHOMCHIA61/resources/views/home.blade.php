@extends('layouts.app')

@section('content')
    <div class="cover blur-in" style="z-index: 1;background-color: rgba(255, 255, 255,0.9);top: 0px;"></div>

    <div class="jumbotron vertical-center" style="z-index: 90;margin: -24px 0px;position: relative;background-color: transparent">
        <div class="container" style="z-index: 90;position: relative;">
            <div class="xx" style="text-align: right">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout <span class="glyphicon glyphicon-log-out"></span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <div class="h-100 row justify-content-center">

                <div class="col-md">
                    <div class="card-body" style="text-align: center">
                        <div class="content_center" style="background-color: white;border-radius: 30px;padding: 20px">
                            <div class="row">
                                <div class="col-md">
                                    <nav>
                                        {{--<img src="{{ asset('img/qttestlogo.jpg') }}" alt="" class="qrlogo">--}}
{{--                                        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge('https://raw.githubusercontent.com/nuttapat115/phachomchia61/master/web/WEB_PHACHOMCHIA61/public/img/logo.png', .3, true)->size(250)->generate(Auth::user()->studentID )) !!} ">--}}
                                        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge(asset('img/qttestlogo.jpg'), .3, true)->size(250)->generate(Auth::user()->studentID )) !!} ">

                                    </nav>
                                    <nav style="margin: 0px 40px;border-radius: 20px;">
                                        <div class="row">
                                            <div class="col-md">
                                                <button type = "button" class = "btn btn-success" style="width: 200px;border-radius: 20px">Save qr</button>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                <div class="col-md" style="text-align: left;">
                                    <div class="xx" style="margin: 47px 0px">
                                        <nav style="margin: 5px 0px">
                                            SIT : <span style="color: red">JO3</span>
                                        </nav>
                                        <nav style="margin: 5px 0px">
                                            NAME : <span style="color: green">{{ Auth::user()->name }}</span>
                                        </nav>
                                        <nav style="margin: 5px 0px">
                                            ID : <span style="color: black;">{{ Auth::user()->studentID }}</span>
                                        </nav>
                                        <nav style="margin: 5px 0px">
                                            DEPARTMENT : Computer engineering
                                        </nav>
                                        <nav style="margin: 10px 0px">
                                            <div class="row">
                                                <div class="col-md">
                                                    <button type = "button" class = "btn btn-default" style="width: 100%;border-radius: 20px">Check Sit</button>
                                                </div>
                                                <div class="col-md">
                                                    <button type = "button" class = "btn btn-default" style="width: 100%;border-radius: 20px">History</button>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
