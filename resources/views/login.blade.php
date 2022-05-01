<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="{{ asset('Image/libraryicon.ico') }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LOGIN RESTO RESERVATION </title>
</head>
<center>
<body style="margin-top:200px;">
    <h1> Resto Reservation Login</h1>
        <form action="{{ route('loginchecker') }}" method="any">
            @csrf 
            <div>
                <label> USERNAME: </label>
                <input class="inputs" type="text" name="username" class="form-control" value="{{ old('username')}}" placeholder="Your Username.." required>
            </div>
            <h1> </h1>
            <div>
                <label> PASSWORD: </label>
                <input class="inputs" type="password" name="password" class="form-control" value="" placeholder="Your Password.." required>
            </div>
            <input class="button" style="margin-top: 20px;" type="submit" name="login" class="btn btn-danger" value="Login"/>
        </form>
        <h1></h1>
        <a> Don't Have an Account? <a class="link" href="{{ route('signup')}}"> Sign Up </a></a>
</body>
</center>
</html>