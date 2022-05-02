<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CREATE RESERVATIONS </title>
</head>
<center>
<h1> CREATE RESERVATIONS </h1>
<nav>
<ul>
      <a href="{{ route('dashboard')}}">DASHBOARD ||</a>
      <a href="{{ route('reservations')}}">RESERVATIONS ||</a>
      <a href="{{ route('createreservations')}}">CREATE RESERVATIONS ||</a>
      <a href="{{ route('registercustomer')}}">REGISTER CUSTOMER ||</a>
      <a href="{{ route('customerlist')}}">CUSTOMER LIST ||</a>
      <a href="{{ route('reservationhistory')}}">RESERVATION HISTORY ||</a>
      <a href="{{ route('menu')}}">MENU ||</a>
      <a href="{{ route('logout')}}">LOGOUT</a>
</ul>
</nav>
</center>
<body style="background-color: gray;">
<center>
<h1> Resto Reservation Create Reservation</h1>
<form action="{{ route('issuereservation') }}" method="any">
        @csrf 
            <div>
                <label>Customer's Name: </label>
                <select class="inputs" name="customerid" required>
                    <option value="">Select Customer</option>
                        @foreach ($tblcustomers as $tblcustomers)
                    <option value='{{ $tblcustomers->Cust_id }}'>{{ $tblcustomers->cust_Fname }} {{ $tblcustomers->cust_Lname }}</option>
                        @endforeach
                </select>
            </div>
            <h1> </h1>
            <div>
                <label> Reservation Event: </label>
                <input class="inputs" type="text" name="reservationevent" class="form-control" value="" placeholder="Reservation Event.." required>
            </div>
            <h1> </h1>
            <div>
                <label> No_of_Person: </label>
                <input class="inputs" type="number" name="nopersons" class="form-control" value="" placeholder="Number of Attendees.." required>
            </div>
            <h1> </h1>
            <div>
                <label>Reservation Date and Time: </label>
                <input type="datetime-local" class="inputs" name="datetime" min="<?php echo date("%Y-%m-%dT%H:%M:%S",strtotime("+0 day")); ?>" required>
            </div>
            <h1> </h1>
            <div>
                <label> Total Price of Orders: </label>
                <input class="inputs" type="number" name="totalamount" class="form-control" value="" placeholder="Total Amount.." required>
            </div>
            <h1> </h1>
            <input class="button" type="submit" name="submit" class="btn btn-danger" value="Create Reservation" required>
            </form>
</center>
</body>
</html>

<style>

</style>