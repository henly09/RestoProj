<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>
<center>
<h1> DASHBOARD </h1>
<nav>
<ul>
      <a href="{{ route('dashboard')}}">DASHBOARD ||</a>
      <a href="{{ route('reservations')}}">RESERVATIONS ||</a>
      <a href="{{ route('createreservations')}}">CREATE RESERVATIONS ||</a>
      <a href="{{ route('registercustomer')}}">REGISTER CUSTOMER ||</a>
      <a href="{{ route('customerlist')}}">CUSTOMER LIST ||</a>
      <a href="{{ route('reservationhistory')}}">RESERVATION HISTORY ||</a>
      <a href="{{ route('logout')}}">LOGOUT</a>
</ul>
</nav>
</center>
<body>
<center>
<div class="flex-container">
        <div class="card">
        <h1> Active <br> Reservations </h1>
        <h1> x{{ $reservationactivecount }} </h1>
        </div>
        <div class="card">
        <h1> Not Active <br> Reservations </h1>
        <h1> x{{ $reservationnotactivecount }} </h1>
        </div>
        <div class="card">
        <h1> Active <br> Customers </h1>
        <h1> x{{ $customeractivecount }} </h1>
        </div>
        <div class="card">
        <h1> Not Active <br> Customers </h1>
        <h1> x{{ $customernotactivecount }} </h1>
        </div>
      </div> 
      
      <div class="flex-container">
        <div class="card">
        <h1> Active <br> Payments </h1>
        <h1> x{{ $paymentsactivecount }} </h1>
        </div>
        <div class="card">
        <h1> Not Active <br> Payments </h1>
        <h1> x{{ $paymentsnotactivecount }} </h1>
        </div>
        <div class="card">
        <h1> Active <br> Cashiers </h1>
        <h1> x{{ $cashiersactivecount }} </h1>
        </div>
        <div class="card">
        <h1> Not Active <br> Cashiers </h1>
        <h1> x{{ $cashiersnotactivecount }} </h1>
        </div>
      </div>
</center>
</body>
</html>

<style>
.flex-container {
  display: inline-flex;
}
.card > h1{
  font-family: 'Arial';
  font-weight: bold;
  color: white;
  text-shadow: 0.5px 0.5px rgba(0,0,0,0.5);
}
div.card {
    flex-direction: column;
}
.flex-container > div {
  background-color: #A73062;
  margin: 10px;
  padding: 20px;
  font-size: 12px;
  border-radius: 5px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
}
</style>