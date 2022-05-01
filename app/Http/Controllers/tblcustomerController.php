<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class tblcustomerController extends Controller
{
    public function customerregister(Request $request){

        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'phonenumber' => 'required',
            'gender' => 'required',
        ]);

        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $address = $request->input('address');
        $phonenumber = $request->input('phonenumber');
        $gender = $request->input('gender');

        $data=array(
            'cust_Fname'=>$fname,
            "cust_Lname"=>$lname,
            "status"=>'active',
            "cust_Address"=>$address,
            "cust_Phone"=>$phonenumber,
            "gender"=>$gender,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()
        );

        DB::table('tblcustomers')->insert($data);

        return redirect()->route('registercustomer');

    }


    public function editcustomerinfo(){

    }

    public function deletecustomerinfo(){
        
    }

}
