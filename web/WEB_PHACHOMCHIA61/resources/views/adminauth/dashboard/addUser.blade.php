@extends('layouts.app')

@section('content')
    @include('sweetalert::alert')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">เพิ่มข้อมูลนักศึกษาใหม่</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('addUserData') }}" aria-label="{{ __('Register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="studentID" class="col-md-4 col-form-label text-md-right">รหัสนักศึกษา</label>

                                <div class="col-md-6">
                                    <input id="studentID" type="text" class="form-control{{ $errors->has('studentID') ? ' is-invalid' : '' }}" name="studentID" value="{{ old('studentID') }}" required>

                                    @if ($errors->has('studentID'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('studentID') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">ชื่อ - นามสกุล</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required >

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">ภาควิชา (ตัวย่อภาษาอังกฤษ)</label>

                                <div class="col-md-6">
                                    <input id="department" type="text" class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{ old('department') }}" required >

                                    @if ($errors->has('department'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sit" class="col-md-4 col-form-label text-md-right">ที่นั่ง</label>

                                <div class="col-md-6">
                                    <input id="sit" type="text" class="form-control{{ $errors->has('sit') ? ' is-invalid' : '' }}" name="sit" value="{{ old('sit') }}" required >

                                    @if ($errors->has('sit'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sit') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        เพิ่มข้อมูล
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
