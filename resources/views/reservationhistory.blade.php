<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVATION HISTORY</title>
</head>
<center>
<h1> RESERVATION HISTORY </h1>
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
@if(!empty($notactivereservations) && $notactivereservations->count())
<table class="table-sortable">
<thead>
  <tr>
    <th> Res_id </th>
    <th> Cust_id </th>
    <th> Payment_no </th>
    <th> C_id </th>
    <th> status </th>
    <th> Fullname </th>
    <th> Address </th>
    <th> Res_event </th>
    <th> Contact_no </th>
    <th> No_of_person </th>
    <th> Res_dateandtime </th>
    <th> created_at </th>
    <th> updated_at </th>
  </tr>
  </thead>
  @foreach($notactivereservations as $key => $data)
  <tbody>
  <tr class="tablerow">
    <td>{{ $data->Res_id }}</td>
    <td>{{ $data->Cust_id }}</td>
    <td>{{ $data->Payment_no }}</td>
    <td>{{ $data->C_id }}</td>
    <td>{{ $data->status }}</td>
    <td>{{ $data->Fullname }}</td>
    <td>{{ $data->Address }}</td>
    <td>{{ $data->Res_event }}</td>
    <td>{{ $data->Contact_no }}</td>
    <td>{{ $data->No_of_person }}</td>
    <td>{{ $data->Res_dateandtime }}</td>
    <td>{{ $data->created_at }}</td>
    <td>{{ $data->updated_at }}</td>
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