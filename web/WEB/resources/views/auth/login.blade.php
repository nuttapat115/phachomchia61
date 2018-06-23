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
    <div class="row justify-content-center">
        <div class="col-sm">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
