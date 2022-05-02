<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUSTOMER LIST</title>
</head>
<center>
<h1> CUSTOMER LIST </h1>
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
@if(!empty($activecustomers) && $activecustomers->count())
<table class="table-sortable">
<thead>
  <tr>
    <th> Cust_id </th>
    <th> cust_Fname </th>
    <th> cust_Lname </th>
    <th> status </th>
    <th> cust_Address </th>
    <th> cust_Phone </th>
    <th> gender </th>
    <th> created_at </th>
    <th> updated_at </th>
    <th> Edit </th>
    <th> Delete </th>
  </tr>
  </thead>
  @foreach($activecustomers as $key => $data)
  <tbody>
  <tr class="tablerow">
    <td>{{ $data->Cust_id }}</td>
    <td>{{ $data->cust_Fname }}</td>
    <td>{{ $data->cust_Lname }}</td>
    <td>{{ $data->status }}</td>
    <td>{{ $data->cust_Address }}</td>
    <td>{{ $data->cust_Phone }}</td>
    <td>{{ $data->gender }}</td>
    <td>{{ $data->created_at }}</td>
    <td>{{ $data->updated_at }}</td>
    <td class="editbutton">
      <form action="{{ route('editcustomerinfo',$data->Cust_id) }}" method="any" class="form-hidden">
        <button>Edit</button>
        @csrf
      </form>
    </td>
    <td class="deletebutton">
      <form action="{{ route('deletecustomerinfo',$data->Cust_id) }}" method="any" class="form-hidden">
        <button >Delete</button>
        @csrf
      </form>
    </td>
  </tr>
  </tbody>
  @endforeach
  @else
  <div style="margin-top: 180px; font-family: Arial; font-weight: bold;">
                <tr>
                    <td classcolspan="10">There are no data.</td>
                </tr>
        </div>
  @endif
</table>
</center>
</body>
</html>

<style>
  table, th, td {
  border: 1px solid black;
  text-align:center;
  padding:5px;
  font-size:15px;
  font-family: 'Arial';
  font-weight: bold;
}
</style>