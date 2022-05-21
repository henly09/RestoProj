@extends('layout/navlayout')

@section('content')


<div class="container"  style="margin-right: 80%; margin-left: 70px; margin-top: 50px;">
<center>
      <div class="form-group">
          <table class="table">
              <thread>
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
              </thread>

              @forelse($activecustomers as $key => $data)
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
                      <button class="btn btn-primary">Edit</button>
                      @csrf
                    </form>
                  </td>
                  <td class="deletebutton">
                    <form action="{{ route('deletecustomerinfo',$data->Cust_id) }}" method="any" class="form-hidden">
                      <button class="btn btn-danger"> Delete </button>
                      @csrf
                    </form>
                  </td>
                </tr>
                </tbody>
                @empty
                <div style="margin-top: 180px; font-family: Arial; font-weight: bold;">
                      <tr>
                          <td classcolspan="10">There are no data.</td>
                      </tr>
                </div>
                @endforelse

            
</table>
</center>

@endsection