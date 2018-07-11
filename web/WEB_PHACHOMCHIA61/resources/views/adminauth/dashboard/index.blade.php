@extends('layouts.app')

@section('content')
   <div class="container-fluid" style="padding: 0px 60px;">
      <div class="row">
         <div class="col bhoechie-tab-container" style="display: inline-flex;">
            <div class="col-2 bhoechie-tab-menu">
               <div class="list-group">
                  <a href="#" class="list-group-item active text-center">
                     นักศึกษาทั้งหมด
                  </a>
                  <a href="#" class="list-group-item text-center">
                     Train
                  </a>
                  <a href="#" class="list-group-item text-center">
                     Hotel
                  </a>
                  <a href="#" class="list-group-item text-center">
                     Restaurant
                  </a>
                  <a href="#" class="list-group-item text-center">
                     Credit Card
                  </a>
               </div>
            </div>
            <div class="col-10 bhoechie-tab">
               <!-- student all section -->
               <div class="bhoechie-tab-content active">
                  <section>
                     <table class="table table-hover">
                        <thead>
                        <tr>
                           <th scope="col">Student Id</th>
                           <th scope="col">Firstname Lastname</th>
                           <th scope="col">Department</th>
                           <th scope="col">Count</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($DetailProfile as $DetailProfiles)
                        <tr>
                           <th scope="row">{{ $DetailProfiles->studentID }}</th>
                           <td>{{ $DetailProfiles->name }}</td>
                           <td>{{ $DetailProfiles->department }}</td>
                           <td>{{ $DetailProfiles->COUNTT }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                     </table>
                  </section>
               </div>
               <!-- train section -->
               <div class="bhoechie-tab-content">
                  <center>
                     <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                     <h3 style="margin-top: 0;color:#55518a">Train Reservation</h3>
                  </center>
               </div>

               <!-- hotel search -->
               <div class="bhoechie-tab-content">
                  <center>
                     <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                     <h3 style="margin-top: 0;color:#55518a">Hotel Directory</h3>
                  </center>
               </div>
               <div class="bhoechie-tab-content">
                  <center>
                     <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                     <h3 style="margin-top: 0;color:#55518a">Restaurant Diirectory</h3>
                  </center>
               </div>
               <div class="bhoechie-tab-content">
                  <center>
                     <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                     <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                  </center>
               </div>
            </div>
         </div>
      </div>
   </div>

   {{--script--}}
   <script>
       $(document).ready(function() {
           $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
               e.preventDefault();
               $(this).siblings('a.active').removeClass("active");
               $(this).addClass("active");
               var index = $(this).index();
               $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
               $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
           });
       });
   </script>

@endsection
