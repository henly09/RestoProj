@extends('layout/front')

@section('content')
<center>
<label style="font-size: 70px"> Resto Reservation Login</label>
    <div class="container-fluid"></div>
      <div class="wrapper">
                <form action="{{ route('loginchecker') }}" method="any">
                    <div class="username">
                        <label style="font-size: 35px"> USERNAME: </label>
                        <input style="font-size: 35px" type="text" name="username" class="form-control" value="{{ old('username')}}" placeholder="Your Username.." required>
                    </div>

                    <div class="password">
                        <label style="font-size: 35px"> PASSWORD: </label>
                        <input style="font-size: 35px" type="password" name="password" class="form-control" value="" placeholder="Your Password.." required>
                    </div>

                    <div class="button">
                        <button type="submit" class="w-100 btn btn-lg btn-outline-success col"> Login</button>
                    </div>

                    <div class="DontAcc">
                        <a> Don't Have an Account? <a class="link" href="{{ route('signup')}}"> Sign Up </a></a>
                    </div>
                </form>
      </div>
    </div>
</center>
@endsection