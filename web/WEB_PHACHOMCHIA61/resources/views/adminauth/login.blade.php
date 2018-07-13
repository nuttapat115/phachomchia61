@extends('layouts.app')

@section('content')
    <div class="cover blur-in box blurred-bg tinted" style="z-index: 1;background-color: rgba(255, 255, 255,0.9);top: 0px;"></div>

    <div class="jumbotron vertical-center" style="z-index: 90;margin: -24px 0px;position: relative;background-color: transparent">
        <div class="container" style="z-index: 90;position: relative;">
            <div class="xx" style="text-align: right">
                <button style="padding: 10px 40px;background-color: white;border-radius: 15px;margin-right: 1.25rem;">
                    ADMINISTRATOR
                </button>
            </div>
            <div class="h-100 row justify-content-center">

                <div class="col-md">
                    <div class="card-body" style="text-align: center">
                        <div class="content_center" style="background-color: white;border-radius: 15px;padding: 50px 0px;">
                            <div class="row">
                                <div class="col">
                                    <form method="POST" action="{{ route('adminlogincheck') }}" aria-label="{{ __('login') }}" style="display: inline-flex">
                                        @csrf

                                        <div>
                                            <div class="col" style="text-align: center;margin: 0px auto">
                                                {{--<input id="studentID" type="text" class="form-control{{ $errors->has('studentID') ? ' is-invalid' : '' }}" name="studentID" value="{{ old('studentID') }}" placeholder="59XXXXXXXX" required autofocus style="border-radius: 50px;text-align: center">--}}
                                                <input id="studentID" type="text" class="form-control{{ $errors->has('studentID') ? ' is-invalid' : '' }}" name="studentID" required autofocus style="border-radius: 50px;text-align: center">

                                                @if ($errors->has('studentID'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('studentID') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <input id="password" type="hidden" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="1234567890" required>

                                        {{--<div class="form-group row mb-0">--}}
                                        {{--<div class="col-md-8 offset-md-4">--}}
                                        <button type="submit" class="btn btn-primary" style="border-radius: 25px;width: 80px;">
                                            {{ __('Login') }}
                                        </button>
                                        {{--</div>--}}
                                        {{--</div>--}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
