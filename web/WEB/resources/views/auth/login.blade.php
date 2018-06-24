@extends('layouts.app')

@section('content')

    <div style="
    height: 100vh;
    margin: -1.5rem 0px;
      z-index: 1;
      background-color: rgba(188, 143, 143, 0.5);
      font-size: 50px;
      text-align: center;
      line-height: 100px;
      box-shadow: 0 3px 5px rgba(0, 0, 0, 0.3);
">

    </div>
<div class="container-fluid" style="
    position: fixed;
    top: 0px;
">
    <div class="row justify-content-center">
        <img src="{{ asset('img/logo.png') }}" alt="" width="600px" height="400px" class="responsive">
    </div>
    <div style="    text-align: center;
    font-size: 30px;
    margin: 20px 0px;
    font-weight: bold;">ตรวจสอบที่นั่งด้วยรหัสนักศึกษา 11 หลัก</div>
    <div class="row justify-content-center justify-content-md-center">
        <div class="col-md-auto">
                <form method="POST" action="{{ route('login') }}" class="form-inline">
                    @csrf
                    <div class="form-group">
                        <input id="id" type="text" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{ old('id') }}" placeholder="61xxxxxxxxx" required autofocus style="width: 400px;border-radius: 20px;text-align: center">

                        @if ($errors->has('id'))
                            <span class="invalid-feedback">
                                    <strong>{{ $errors->first('id') }}</strong>
                            </span>
                        @endif
                    </div>
                    <input type="hidden" id="password" name="password" value="password">
                    <button type="submit" class="btn btn-warning" style="margin-left: 15px;border-radius: 20px"><i class="fas fa-search"></i> Search</button>
                </form>
        </div>
    </div>
</div>
@endsection
