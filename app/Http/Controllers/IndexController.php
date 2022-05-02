<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function login(){
        return view('login',['message' => '']); // login view
    }

    public function signup(){
        return view('signup',['message' => '']); // signup view
    }

    public function dashboard(){  // dashboard view

        try {
            $name = session('globalFname'); // variable para sa checking if the user of system is logged in
            if (!$name == null){

                $tblreservationsactive = DB::table('tblreservations')->where('status', '=' , 'active')->get(); // count active reservation
                $reservationactivecount = $tblreservationsactive->count(); 
        
                $tblreservationsnotactive = DB::table('tblreservations')->where('status', '=' , 'notactive')->get(); // count not active reservation
                $reservationnotactivecount = $tblreservationsnotactive->count();
        
                $tblcustomersactive = DB::table('tblcustomers')->where('status', '=' , 'active')->get(); // count active customers
                $customeractivecount = $tblcustomersactive->count();
        
                $tblcustomersnotactive = DB::table('tblcustomers')->where('status', '=' , 'notactive')->get(); // count not active customers
                $customernotactivecount = $tblcustomersnotactive->count();
        
                $tblpaymentsactive = DB::table('tblpayments')->where('status', '=' , 'active')->get(); // count active payments 
                $paymentsactivecount = $tblpaymentsactive->count();

                $tblpaymentsnotactive = DB::table('tblpayments')->where('status', '=' , 'notactive')->get(); // count not active payments
                $paymentsnotactivecount = $tblpaymentsnotactive->count();

                $tblcashiersactive = DB::table('tblcashiers')->where('status', '=' , 'active')->get(); // count active cashier accounts
                $cashiersactivecount = $tblcashiersactive->count();

                $tblcashiersnotactive = DB::table('tblcashiers')->where('status', '=' , 'notactive')->get();  // count not active cashiers
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
            else{
                return redirect()->route('login'); // return login page if not logged
            }

        } catch (\Exception $e){
            return redirect()->route('login'); // return login page if occured error
        }
    }

    public function reservations(){ // reservation view page
        try {
        $name = session('globalFname');
        if (!$name == null){
        $activereservations = DB::table('tblreservations')->select('*')->where('status','=','active')->get(); // getting all data from table reservations in database
        return view('reservations',['message' => '','activereservations' => $activereservations]);
        } else {
            return redirect()->route('login');
        }
        } catch (\Exception $e){
        return redirect()->route('login');
        }
    }

    public function menu(){ // menu view page

        $name = session('globalFname');
        if (!$name == null){
        ///////////////////////////////////////////////////////////////////////////
        return view('menu',['message' => '']);
        } else {
            return redirect()->route('login');
        }

    }
    
    public function createreservations(){ // create reservations view page
        try {
            $name = session('globalFname');
            if (!$name == null){
            $tblcustomers = DB::table('tblcustomers')->select('*')->where('status', '=' , 'active')->get();
            return view('createreservations',['message' => '','tblcustomers' => $tblcustomers]);

        } else {
            return redirect()->route('login');
            }
        } catch (\Exception $e){
            return redirect()->route('login');
        }   
    }

    public function registercustomer(){// register cusomer view page
        try {
            $name = session('globalFname');
            if (!$name == null){
        return view('registercustomer',['message' => '']);
    } else {
        return redirect()->route('login');
        }
    } catch (\Exception $e){
        return redirect()->route('login');
    }   
    }

    public function customerlist(){ // customer list page
        try {
            $name = session('globalFname');
            if (!$name == null){
        $activecustomers = DB::table('tblcustomers')->select('*')->where('status','=','active')->get();
        return view('customerlist',['message' => '','activecustomers' => $activecustomers]);
    } else {
        return redirect()->route('login');
        }
    } catch (\Exception $e){
        return redirect()->route('login');
    }   
    }

    public function reservationhistory(){ // reservation history page
        try {
            $name = session('globalFname');
            if (!$name == null){
        $notactivereservations = DB::table('tblreservations')->select('*')->where('status','=','notactive')->get();
        return view('reservationhistory',['message' => '', 'notactivereservations' => $notactivereservations]);
    } else {
        return redirect()->route('login');
        }
    } catch (\Exception $e){
        return redirect()->route('login');
    }  
    }

    public function logout(Request $request){ // logout function
        $request->session()->flush();
        return view('login',['message' => '']);
    }

    public function loginchecker(Request $request){ // login validation 

        $request->session()->flush();
    
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');
        $user = DB::table('tblcashiers')->where('username', '=', $username)->where('password', '=', $password)->where('status', '=' , 'active')->get();
        $usercount = $user->count();
        $Fname = DB::table('tblcashiers')->select('First_Name')->where('username', '=', $username)->where('password', '=', $password)->where('status', '=' , 'active')->pluck('First_Name')->first();
        $Lname = DB::table('tblcashiers')->select('Last_Name')->where('username', '=', $username)->where('password', '=', $password)->where('status', '=' , 'active')->pluck('Last_Name')->first();
        $request->session()->put('globalFname', $Fname);
        $request->session()->put('globalLname', $Lname);

        if (!$usercount == 0) {
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('login');
        }

    }

    public function signupchecker(Request $request){ // signup validation

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
