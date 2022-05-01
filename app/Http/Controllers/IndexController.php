<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function login(){
        return view('login',['message' => '']);
    }

    public function signup(){
        return view('signup',['message' => '']);
    }

    public function dashboard(){
        return view('dashboard',['message' => '']);
    }

    public function reservations(){
        return view('reservations',['message' => '']);
    }
    
    public function createreservations(){
        return view('createreservations',['message' => '']);
    }

    public function registercustomer(){
        return view('registercustomer',['message' => '']);
    }

    public function customerlist(){
        return view('customerlist',['message' => '']);
    }

    public function reservationhistory(){
        return view('reservationhistory',['message' => '']);
    }

    public function logout(Request $request){
        $request->session()->flush();
        return view('login',['message' => '']);
    }

    public function loginchecker(Request $request){

        $request->session()->flush();
    
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');
        $user = DB::table('tblcashiers')->where('username', '=', $username)->where('password', '=', $password)->where('status', '=' , 'active')->get();
        $usercount = $user->count();

        if (!$usercount == 0) {
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('login');
        }

    }

    public function signupchecker(Request $request){

        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required',
            'password' => 'required',
            'confirmpassword' => 'required',
            'address' => 'required',
            'phonenumber' => 'required',
            'email' => 'required',
            'gender' => 'required',
        ]);

        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $username = $request->input('username');
        $password = $request->input('password');
        $confirmpassword = $request->input('confirmpassword');
        $address = $request->input('address');
        $phonenumber = $request->input('phonenumber');
        $email = $request->input('email');
        $gender = $request->input('gender');

    if ($password == $confirmpassword) {

        $data=array(
            'First_Name'=>$fname,
            "Last_Name"=>$lname,
            "username"=>$username,
            "password"=>$password,
            "status"=>'active',
            "Address"=>$address,
            "Phone_no"=>$phonenumber,
            "Email"=>$email,
            "gender"=>$gender,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()
        );

        DB::table('tblcashiers')->insert($data);

        return redirect()->route('login');
    }
    else {
        return redirect()->route('signup');
    }


    }
}
