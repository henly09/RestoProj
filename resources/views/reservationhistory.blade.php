@extends('layout/navlayout')

@section('content')
@if(!empty($notactivereservations) && $notactivereservations->count())



<div class="container"  style="margin-right: 80%; margin-left: 70px; margin-top: 50px;">
<center>
      <div class="form-group">
          <table class="table">
              <thread>
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
              </thread>


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
@endsection


















