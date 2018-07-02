@extends('layouts.app')

@section('content')

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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
