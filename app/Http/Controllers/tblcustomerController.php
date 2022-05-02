<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class tblcustomerController extends Controller
{
    public function customerregister(Request $request){ // customer register function //

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

    public function customeredited(Request $request){ // customer edit function

        $this->validate($request, [
            'customerid' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'phonenumber' => 'required',
            'gender' => 'required',
        ]);

        $customerid = $request->input('customerid');
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $address = $request->input('address');
        $phonenumber = $request->input('phonenumber');
        $gender = $request->input('gender');

        DB::table('tblcustomers')->where('Cust_id', $customerid)
        ->update(['cust_Fname' => $fname,'cust_Lname' => $lname,'cust_Address' => $address,'cust_Phone' => $phonenumber,'gender' => $gender,'updated_at' => \Carbon\Carbon::now()]);

        return redirect()->route('customerlist');
    }


    public function editcustomerinfo($Cust_id){ // edit customer data transfer to view

        $Cust_id = DB::table('tblcustomers')->select('Cust_id')->where('Cust_id', $Cust_id)->pluck('Cust_id')->first();
        $cust_Fname = DB::table('tblcustomers')->select('cust_Fname')->where('Cust_id', $Cust_id)->pluck('cust_Fname')->first();
        $cust_Lname = DB::table('tblcustomers')->select('cust_Lname')->where('Cust_id', $Cust_id)->pluck('cust_Lname')->first();
        $cust_Address = DB::table('tblcustomers')->select('cust_Address')->where('Cust_id', $Cust_id)->pluck('cust_Address')->first();
        $cust_Phone = DB::table('tblcustomers')->select('cust_Phone')->where('Cust_id', $Cust_id)->pluck('cust_Phone')->first();
        $gender = DB::table('tblcustomers')->select('gender')->where('Cust_id', $Cust_id)->pluck('gender')->first();

        return view('customer.edit',['Cust_id' => $Cust_id,'cust_Fname' => $cust_Fname,'cust_Lname' => $cust_Lname,'cust_Address' => $cust_Address,'cust_Phone' => $cust_Phone,'gender' => $gender]);
    }

    public function deletecustomerinfo($Cust_id){ // delete custoemr function

        DB::table('tblcustomers')->where('Cust_id', $Cust_id)->update(['status' => 'notactive','updated_at' => \Carbon\Carbon::now()]);
        return redirect()->route('customerlist');

    }

}
