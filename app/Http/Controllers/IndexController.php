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

        $tblreservationsactive = DB::table('tblreservations')->where('status', '=' , 'active')->get();
        $reservationactivecount = $tblreservationsactive->count();

        $tblreservationsnotactive = DB::table('tblreservations')->where('status', '=' , 'notactive')->get();
        $reservationnotactivecount = $tblreservationsnotactive->count();

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        $tblcustomersactive = DB::table('tblcustomers')->where('status', '=' , 'active')->get();
        $customeractivecount = $tblcustomersactive->count();

        $tblcustomersnotactive = DB::table('tblcustomers')->where('status', '=' , 'notactive')->get();
        $customernotactivecount = $tblcustomersnotactive->count();

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        $tblpaymentsactive = DB::table('tblpayments')->where('status', '=' , 'active')->get();
        $paymentsactivecount = $tblpaymentsactive->count();

        $tblpaymentsnotactive = DB::table('tblpayments')->where('status', '=' , 'notactive')->get();
        $paymentsnotactivecount = $tblpaymentsnotactive->count();

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        $tblcashiersactive = DB::table('tblcashiers')->where('status', '=' , 'active')->get();
        $cashiersactivecount = $tblcashiersactive->count();

        $tblcashiersnotactive = DB::table('tblcashiers')->where('status', '=' , 'notactive')->get();
        $cashiersnotactivecount = $tblcashiersnotactive->count();
       
        
        return view('dashboard',['message' => '',
            'reservationactivecount' => $reservationactivecount,
            'reservationnotactivecount' => $reservationnotactivecount,
            'customeractivecount' => $customeractivecount,
            'customernotactivecount' => $customernotactivecount,
            'paymentsactivecount' => $paymentsactivecount,
            'paymentsnotactivecount' => $paymentsnotactivecount,
            'cashiersactivecount' => $cashiersactivecount,
            'cashiersnotactivecount' => $cashiersnotactivecount]);
    }

    public function reservations(){

        $activereservations = DB::table('tblreservations')->select('*')->where('status','=','active')->get();

        return view('reservations',['message' => '','activereservations' => $activereservations]);
    }
    
    public function createreservations(){
        return view('createreservations',['message' => '']);
    }

    public function registercustomer(){
        return view('registercustomer',['message' => '']);
    }

    public function customerlist(){

        $activecustomers = DB::table('tblcustomers')->select('*')->where('status','=','active')->get();

        return view('customerlist',['message' => '','activecustomers' => $activecustomers]);
    }

    public function reservationhistory(){

        $notactivereservations = DB::table('tblreservations')->select('*')->where('status','=','notactive')->get();

        return view('reservationhistory',['message' => '', 'notactivereservations' => $notactivereservations]);
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
            "status"=>'notactive',
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
