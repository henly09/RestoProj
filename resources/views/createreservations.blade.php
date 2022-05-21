@extends('layout/navlayout')

@section('content')

<center>
<div class="card" style="margin-top:40px">
    <div class="card-header row ">
        <label class="text-left col font-weight-bold " style="font-size:22px">Resto Reservation Create Reservation</;>
    </div>
</div> 
<div class="card">
    <div class="card-body">
        <form action="{{ route('issuereservation') }}" method="any">
            @csrf 

                <div class="container">
                    <div class="row">
                        <label for="reservationevent" class="col text-md-left" style="font-size: 20px font-weight-bold">Customer's Name:</label>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="customerid" required>
                            <option value="">Select Customer</option>
                                @foreach ($tblcustomers as $tblcustomers)
                            <option value='{{ $tblcustomers->Cust_id }}'>{{ $tblcustomers->cust_Fname }} {{ $tblcustomers->cust_Lname }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('reservationevent'))
                            <span class="text-danger">{{ $errors->first('reservationevent') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <h1> </h1>

                <div class="container">
                    <div class="row">
                        <label for="reservationevent" class="col text-md-left font-weight-bold" style="font-size: 20px">Reservation Event:</label>
                    </div>
                    <div class="row">
                    <input type="text" id="reservationevent" class="form-control" name="reservationevent" placeholder="Reservation Event.." value="" required>
                        @if ($errors->has('reservationevent'))
                            <span class="text-danger">{{ $errors->first('reservationevent') }}</span>
                        @endif
                    </div>
                </div>

                <h1> </h1>

                <div class="container">
                    <div class="row">
                        <label for="nopersons" class="col text-md-left font-weight-bold" style="font-size: 20px">No of Person:</label>
                    </div>
                    <div class="row">
                        <input type="number" id="nopersons" class="form-control col" name="nopersons" placeholder="Number of Attendees.." value="" required>
                        @if ($errors->has('nopersons'))
                            <span class="text-danger">{{ $errors->first('nopersons') }}</span>
                        @endif
                    </div>
                </div>

                <h1> </h1>

                <div class="container">
                    <div class="row">
                        <label for="datetime" class="col text-md-left font-weight-bold" style="font-size: 20px">Reservation Date and Time:</label>
                    </div>
                    <div class="row">
                        <input type="datetime-local" id="datetime" class="form-control col " name="datetime"min="<?php echo date("%Y-%m-%dT%H:%M:%S",strtotime("+0 day")); ?>" required>
                        @if ($errors->has('datetime'))
                            <span class="text-danger">{{ $errors->first('datetime') }}</span>
                        @endif
                    </div>
                </div>

                <h1> </h1>

                <div class="container">
                    <div class="row">
                        <label for="totalamount" class="col text-md-left font-weight-bold" style="font-size: 20px">Total Price of Orders:</label>
                    </div>
                    <div class="row">
                    <input type="number" name="totalamount" class="form-control col" value="" placeholder="Total Amount.." required>
                        @if ($errors->has('totalamount'))
                            <span class="text-danger">{{ $errors->first('totalamount') }}</span>
                        @endif
                    </div>
                </div>

                <h1> </h1>

                <input style="margin-top:30px;"class="w-100 btn btn-outline-success" type="submit" name="submit" value="Create Reservation" required>
        </form>
    </div>
</div>
</center>

@endsection
