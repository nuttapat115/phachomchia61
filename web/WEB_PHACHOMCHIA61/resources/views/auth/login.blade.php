@extends('layouts.app')

@section('content')
<div class="cover blur-in" style="z-index: 1;background-color: rgba(255, 255, 255,0.9);top: 0px;"></div>
<div class="container" style="z-index: 90;position: relative;">
    <div class="row justify-content-center">
        <div>
            <img src="{{ asset('img/logo.png') }}" alt="" class="logoInLogin">
        </div>

        <div class="col-md-8">
                <div class="card-body" style="text-align: center;font-size: 20px;margin: -25px 0px;">
                    <span>ตรวจสอบที่นั่งด้วยรหัสนักศึกษา 11 หลัก</span>
                </div>
                <div class="card-body" style="text-align: center">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" style="display: inline-flex">
                        @csrf

                        <div>
                            <div class="col-md" style="text-align: center;margin: 0px auto">
                                <input id="studentID" type="text" class="form-control{{ $errors->has('studentID') ? ' is-invalid' : '' }}" name="studentID" value="{{ old('studentID') }}" placeholder="61XXXXXXXX" required autofocus style="border-radius: 50px;text-align: center">

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
@endsection
