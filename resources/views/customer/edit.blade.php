<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT CUSTOMER</title>
</head>
<center>
<h1> EDIT CUSTOMER </h1>
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
<h1> Resto Reservation Customer Registration</h1>
<form action="{{ route('customeredited') }}" method="any">
            @csrf 
            <div>
                <label> Customer ID: </label>
                <input class="inputs" type="text" name="customerid" class="form-control" value="{{ $Cust_id }}" placeholder="First Name.." readonly>
            </div>
            <h1> </h1>
            <div>
                <label> First Name: </label>
                <input class="inputs" type="text" name="fname" class="form-control" value="{{ $cust_Fname }}" placeholder="First Name.." required>
            </div>
            <h1> </h1>
            <div>
                <label> Last Name: </label>
                <input class="inputs" type="text" name="lname" class="form-control" value="{{ $cust_Lname }}" placeholder="Last Name.." required>
            </div>
            <h1> </h1>
            <div>
                <label> Address: </label>
                <input class="inputs" type="text" name="address" class="form-control" value="{{ $cust_Address }}" placeholder="Address.." required>
            </div>
            <h1> </h1>
            <div>
                <label> Phone Number: </label>
                <input class="inputs" type="text" name="phonenumber" class="form-control" value="{{ $cust_Phone }}" placeholder="Phone Number.." required>
            </div>
            <h1> </h1>
            <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="{{ $gender }}">{{ $gender }}</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            <h1> </h1>
            <input class="button" style="margin-top: 20px;" type="submit" name="signup" class="btn btn-danger" value="Update"/>
        </form>
</center>
</body>
</html>

<style>

</style>