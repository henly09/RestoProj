@extends('layout/navlayout')

@section('content')



<div class="container" style ="margin-top: 50px;">
  <div class="row">
    <div class="col">
      <div class="card-group">
            <div class="card"  style="width: 30px; height: 150px;">
              <div class="card-body" style="margin-right: 40px;">
              <center>
                <h5> Active Reservations </h5>
                <h6> x{{ $reservationactivecount }} </h6>
              </center>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
              <center>
                <h5> Not Active Reservations </h5>
                <h6> x{{ $reservationnotactivecount }} </h6>
              </center>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
              <center>
                <h5> Active Customers </h5>
                <h6> x{{ $customeractivecount }} </h6>
              </center>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
              <center>
                <h5> Not Active Customers </h5>
                <h6> x{{ $customernotactivecount }} </h6>
              </center>
              </div>
            </div>
        </div>
        

        <div class="col" style>
          <div class="card-group">
            <div class="card"  style="width: 30px; height: 150px;">
              <div class="card-body" style="margin-right: 40px;">
              <center>
              <h5> Active Payments </h5>
              <h6> x{{ $paymentsactivecount }} </h6>
              </center>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
              <center>
              <h5> Not Active Payments </h5>
              <h6> x{{ $paymentsnotactivecount }} </h6>
              </center>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
              <center>
              <h5> Active Cashiers </h5>
              <h6> x{{ $cashiersactivecount }} </h6>
              </center>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
              <center>
              <h5> Not Active Cashiers </h5>
              <h6> x{{ $cashiersnotactivecount }} </h6>
              </center>
              </div>
            </div>
        </div>
        </div>

        

    </div>
  </div>
</div>

</center>
</body>
</html>
@endsection