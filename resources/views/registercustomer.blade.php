@extends('layout/navlayout')

@section('content')
<center>
<div class="card" style="margin-top:40px">
    <div class="card-header row ">
        <label class="text-left col font-weight-bold " style="font-size:22px">Resto Reservation Customer Registration</;>
    </div>
</div> 
<div class="card">
    <div class="card-body">
        <form action="{{ route('customerregister') }}" method="any">
            @csrf 

            <div class="container">
                <div class="row">
                    <label for="fname" class="col text-md-left font-weight-bold" style="font-size: 20px">First Name:</label>
                </div>
                <div class="row">
                <input type="text" name="fname" class="form-control" value="{{ old('username')}}" placeholder="First Name.." required>
                    @if ($errors->has('fname'))
                        <span class="text-danger">{{ $errors->first('fname') }}</span>
                    @endif
                </div>
            </div>

            <h1> </h1>

            <div class="container">
                <div class="row">
                    <label for="lname" class="col text-md-left font-weight-bold" style="font-size: 20px">Last Name:</label>
                </div>
                <div class="row">
                <input  type="text" name="lname" class="form-control" value="" placeholder="Last Name.." required>
                    @if ($errors->has('lname'))
                        <span class="text-danger">{{ $errors->first('lname') }}</span>
                    @endif
                </div>
            </div>

            <h1> </h1>

            <div class="container">
                <div class="row">
                    <label for="address" class="col text-md-left font-weight-bold" style="font-size: 20px">Address:</label>
                </div>
                <div class="row">
                <input  type="text" name="address" class="form-control" value="" placeholder="Address.." required>

                    @if ($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                </div>
            </div>

            <h1> </h1>

            <div class="container">
                <div class="row">
                    <label for="phonenumber" class="col text-md-left font-weight-bold" style="font-size: 20px">Phone Number:</label>
                </div>
                <div class="row">
                <input type="number" name="phonenumber" class="form-control" value="" placeholder="Phone Number.." required>

                    @if ($errors->has('phonenumber'))
                        <span class="text-danger">{{ $errors->first('phonenumber') }}</span>
                    @endif
                </div>
            </div>

            <h1> </h1>

            <div class="container">
                    <div class="row">
                        <label for="gender" class="col text-md-left" style="font-size: 20px font-weight-bold">Gender</label>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="gender" required>
                            <option value="">Select Customer</option>
                            <option value="">Select Gender..</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                            @if ($errors->has('gender'))
                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

            <h1> </h1>

            <input style="margin-top:30px;"class="w-100 btn btn-outline-success" type="submit" name="submit" value="Create Reservation" required>
        </form>
    </div>
</div>
    
</center>

@endsection