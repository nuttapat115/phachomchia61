@extends('layouts.app')

@section('content')
    <div class="cover blur-in box blurred-bg tinted" style="z-index: 1;background-color: rgba(255, 255, 255,0.9);top: 0px;"></div>

    <div class="jumbotron vertical-center" style="z-index: 90;margin: -24px 0px;position: relative;background-color: transparent">
        <div class="container" style="z-index: 90;position: relative;">
            <div class="h-100 row justify-content-center">

                <div class="col-md">
                    <div class="card-body" style="text-align: center">
                        <div class="content_center" style="background-color: white;border-radius: 15px;padding: 20px">
                            <div class="row">
                                <div class="col" style="font-size: 30px;font-weight: bold;text-align: left">
                                    HISTORY
                                </div>
                                <div class="col-8" style="text-align: left">
                                    <nav>
                                        NAME : <span>{{ Auth::user()->name }}</span>
                                    </nav>
                                    <nav>
                                        ID : <span>{{ Auth::user()->studentID }}</span>
                                    </nav>
                                    <nav>
                                        COUNT : <span style="color: red">{{ $count }} &nbsp;({{ $count*25 }} %)</span>
                                    </nav>
                                </div>
                            </div>
                            <div class="row">
                                @desktop
                                    <div class="col"></div>
                                    <div class="col-8">
                                        <table class="table" style="margin-top: 1rem">
                                            <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Time login</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($output as $outputs)
                                                <tr>
                                                    <th scope="row">{{ date("d/m/Y", strtotime($outputs->date)) }}</th>
                                                    <td>{{ $outputs->status }}</td>
                                                    <td>{{ $outputs->time }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @elsedesktop
                                    <div class="col">
                                        <table class="table" style="margin-top: 2rem;margin-bottom: 2rem">
                                            <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Time login</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($output as $outputs)
                                                <tr>
                                                    <th scope="row">{{ date("d/m/Y", strtotime($outputs->date)) }}</th>
                                                    <td>{{ $outputs->status }}</td>
                                                    <td>{{ $outputs->time }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @enddesktop
                            </div>
                            <div class="row">
                                <div class="col" style="text-align: left">
                                    @desktop
                                        <button type="button" class="btn btn-secondary" style="border-radius: 15px;font-size: 15px;width: 200px" onclick="window.location.href = '{{ route('home') }}' ">back</button>
                                    @elsedesktop
                                        <button type="button" class="btn btn-secondary" style="border-radius: 15px;font-size: 15px;width: 145px" onclick="window.location.href = '{{ route('home') }}' ">back</button>
                                    @enddesktop
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
