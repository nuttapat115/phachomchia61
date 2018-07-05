@extends('layouts.app')

@section('content')

        <div class="container-fluid" style="z-index: 90;position: relative;">
            <div class="xx" style="text-align: right">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout <span class="glyphicon glyphicon-log-out"></span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <div class="h-100 row justify-content-center">
                    <div class="col" style="text-align: center">
                        <button type="button" class="btn btn-light" style="border-radius: 15px;font-size: 15px;width: 200px">back</button>
                    </div>
                    <div class="col-8 align-middle" style="background-color: white;text-align: center;font-size: 30px;padding: 15px 0px">
                        STAGE
                    </div>
                    <div class="col"></div>
            </div>
            <section id="stage" style="margin-top: 20px">
                <div class="h-100 row justify-content-center" id="stageHead">
                    <div class="col"></div>
                    <div class="col-5">
                        <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" style="background-color: black;color: white;">A</th>
                                    <th scope="col" style="background-color: black;color: white;">B</th>
                                    <th scope="col" style="background-color: black;color: white;">C</th>
                                    <th scope="col" style="background-color: black;color: white;">D</th>
                                    <th scope="col" style="background-color: black;color: white;">E</th>
                                    <th scope="col" style="background-color: black;color: white;">F</th>
                                    <th scope="col" style="background-color: black;color: white;">G</th>
                                    <th scope="col" style="background-color: black;color: white;">H</th>
                                    <th scope="col" style="background-color: black;color: white;">I</th>
                                    <th scope="col" style="background-color: black;color: white;">J</th>
                                    <th scope="col" style="background-color: black;color: white;">K</th>
                                    <th scope="col" style="background-color: black;color: white;">L</th>
                                    <th scope="col" style="background-color: black;color: white;">M</th>
                                    <th scope="col" style="background-color: black;color: white;">N</th>
                                    <th scope="col" style="background-color: black;color: white;">O</th>
                                    <th scope="col" style="background-color: black;color: white;">P</th>
                                    <th scope="col" style="background-color: black;color: white;">Q</th>
                                </tr>
                                </thead>
                            </table>
                    </div>
                    <div class="col"></div>
                    <div class="col-5">
                        <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" style="background-color: black;color: white;">R</th>
                                    <th scope="col" style="background-color: black;color: white;">S</th>
                                    <th scope="col" style="background-color: black;color: white;">T</th>
                                    <th scope="col" style="background-color: black;color: white;">U</th>
                                    <th scope="col" style="background-color: black;color: white;">V</th>
                                    <th scope="col" style="background-color: black;color: white;">W</th>
                                    <th scope="col" style="background-color: black;color: white;">X</th>
                                    <th scope="col" style="background-color: black;color: white;">Y</th>
                                    <th scope="col" style="background-color: black;color: white;">Z</th>
                                    <th scope="col" style="background-color: black;color: white;">xx</th>
                                    <th scope="col" style="background-color: black;color: white;">xx</th>
                                    <th scope="col" style="background-color: black;color: white;">xx</th>
                                    <th scope="col" style="background-color: black;color: white;">xx</th>
                                    <th scope="col" style="background-color: black;color: white;">xx</th>
                                    <th scope="col" style="background-color: black;color: white;">xx</th>
                                    <th scope="col" style="background-color: black;color: white;">xx</th>
                                    <th scope="col" style="background-color: black;color: white;">xx</th>
                                </tr>
                                </thead>
                            </table>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="h-100 row justify-content-center" id="stage1">
                    <div class="col" style="font-size: 0.9rem;text-align: center">1</div>
                    <div class="col-5">
                        <table class="table" style="margin-bottom: 0px">
                            <thead>
                            <tr>
                                <th class="a01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="b01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="c01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="d01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="e01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="f01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="g01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="h01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="i01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="j01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="k01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="l01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="m01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="n01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="o01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="p01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="q01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="col"></div>
                    <div class="col-5">
                        <table class="table" style="margin-bottom: 0px">
                                <thead>
                                <tr>
                                    <th class="r01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="s01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="t01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="u01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="v01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="w01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="x01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="y01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="z01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                </tr>
                                </thead>
                            </table>
                    </div>
                    <div class="col" style="font-size: 0.9rem;text-align: center">1</div>
                </div>
                <div class="h-100 row justify-content-center" id="stage1">
                    <div class="col" style="font-size: 0.9rem;text-align: center">1</div>
                    <div class="col-5">
                        <table class="table" style="margin-bottom: 0px">
                            <thead>
                            <tr>
                                <th class="a01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="b01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="c01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="d01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="e01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="f01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="g01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="h01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="i01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="j01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="k01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="l01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="m01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="n01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="o01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="p01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                <th class="q01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="col"></div>
                    <div class="col-5">
                        <table class="table" style="margin-bottom: 0px">
                                <thead>
                                <tr>
                                    <th class="r01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="s01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="t01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="u01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="v01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="w01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="x01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="y01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="z01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                    <th class="xx01" scope="col" style="background-color: white;padding: 10px;border-right:4px solid #c77d7d"></th>
                                </tr>
                                </thead>
                            </table>
                    </div>
                    <div class="col" style="font-size: 0.9rem;text-align: center">1</div>
                </div>
            </section>
        </div>

        <script>
            var x = '{{ $sit }}';
            $("."+x).css("backgroundColor", "#20c997");
            console.log(x);
        </script>
@endsection
