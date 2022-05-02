<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resto Reservation Signup</title>
</head>
<body style="background-color: gray;">
<center>
<h1> Resto Reservation Signup</h1>
        <form action="{{ route('signupchecker') }}" method="any">
            @csrf 
            <div>
                <label> First Name: </label>
                <input class="inputs" type="text" name="fname" class="form-control" value="{{ old('username')}}" placeholder="First Name.." required>
            </div>
            <h1> </h1>
            <div>
                <label> Last Name: </label>
                <input class="inputs" type="text" name="lname" class="form-control" value="" placeholder="Last Name.." required>
            </div>
            <h1> </h1>
            <div>
                <label> Username: </label>
                <input class="inputs" type="text" name="username" class="form-control" value="" placeholder="User Name.." required>
            </div>
            <h1> </h1>
            <div>
                <label> Password: </label>
                <input class="inputs" type="password" name="password" class="form-control" value="" placeholder="Password.." required>
            </div>
            <h1> </h1>
            <div>
                <label> Confirm Password: </label>
                <input class="inputs" type="password" name="confirmpassword" class="form-control" value="" placeholder="Confirm Your Password.." required>
            </div>
            <h1> </h1>
            <div>
                <label> Address: </label>
                <input class="inputs" type="text" name="address" class="form-control" value="" placeholder="Address.." required>
            </div>
            <h1> </h1>
            <div>
                <label> Phone Number: </label>
                <input class="inputs" type="number" name="phonenumber" class="form-control" value="" placeholder="Phone Number.." required>
            </div>
            <h1> </h1>
            <div>
                <label> Email: </label>
                <input class="inputs" type="text" name="email" class="form-control" value="" placeholder="Email.." required>
            </div>
            <h1> </h1>
            <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="">Select Gender..</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            <h1> </h1>
            <input class="button" style="margin-top: 20px;" type="submit" name="signup" class="btn btn-danger" value="Sign-Up"/>
        </form>
        <h1> </h1>
        <a> Already have an Account <a class="link" href="{{ route('login')}}"> Login Already! </a></a>
</center>
</body>
</html>