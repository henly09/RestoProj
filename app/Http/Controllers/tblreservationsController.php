<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class tblreservationsController extends Controller
{
    public function issuereservation(Request $request){ // creating reservation function

        $Fname = session('globalFname');
        $Lname = session('globalLname');

        $this->validate($request, [
            'customerid' => 'required',
            'reservationevent' => 'required',
            'nopersons' => 'required',
            'datetime' => 'required',
            'totalamount' => 'required',
        ]);

        $customerid = $request->input('customerid');
        $reservationevent = $request->input('reservationevent');
        $nopersons = $request->input('nopersons');
        $datetime = \Carbon\Carbon::parse($request->input('datetime'));
        $totalamount = $request->input('totalamount');

        $custnamefname = DB::table('tblcustomers')->select('cust_Fname')->where('Cust_id', $customerid)->pluck('cust_Fname')->first();
        $custnamelname = DB::table('tblcustomers')->select('cust_Lname')->where('Cust_id', $customerid)->pluck('cust_Lname')->first();

        $cashierid = DB::table('tblcashiers')->select('C_id')->where('First_Name', $Fname)->where('Last_Name', $Lname)->pluck('C_id')->first();
        $cashierFname = DB::table('tblcashiers')->select('First_Name')->where('C_id', $cashierid)->pluck('First_Name')->first();
        $cashierLname = DB::table('tblcashiers')->select('Last_Name')->where('C_id', $cashierid)->pluck('Last_Name')->first();

        $paymentinput=array(
            "Cust_id" => $customerid,
            "Name_of_customer" => $custnamefname." ".$custnamelname,
            "C_id" => $cashierid ,
            "Name_of_cashier" => $cashierFname." ".$cashierLname,
            "status" => 'active',
            "Total_amount" => $totalamount,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()
        );

        DB::table('tblpayments')->insert($paymentinput);

        $paymentid = DB::table('tblpayments')
                    ->select('Payment_no')
                    ->where('Cust_id', $customerid)
                    ->where('Name_of_customer', $custnamefname." ".$custnamelname)
                    ->where('C_id', $cashierid)
                    ->where('Name_of_cashier',$cashierFname." ".$cashierLname)
                    ->where('status','active')
                    ->where('Total_amount',$totalamount)
                    ->pluck('Payment_no')->first();

        $address = DB::table('tblcustomers')->select('cust_Address')->where('Cust_id',$customerid)->pluck('cust_Address')->first();
        $cpnumber = DB::table('tblcustomers')->select('cust_Phone')->where('Cust_id',$customerid)->pluck('cust_Phone')->first();

        $reservationinput=array(
            "Cust_id" => $customerid,
            "Payment_no" => $paymentid,
            "C_id" => $cashierid ,
            "status" => 'active', 
            "Fullname" => $custnamefname." ".$custnamelname, 
            "Address" => $address,  
            "Res_event" => $reservationevent,
            "Contact_no" => $cpnumber,
            "No_of_person" => $nopersons ,
            "Res_dateandtime" => $datetime,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()
        );

        DB::table('tblreservations')->insert($reservationinput);

        return redirect()->route('createreservations');

    }

    public function deletereservation($Res_id){ // delete reservation function

            $paymentid = DB::table('tblreservations')->select('Payment_no')->where('Res_id',$Res_id)->pluck('Payment_no')->first();
            DB::table('tblpayments')->where('Payment_no', $paymentid)->update(['status' => 'notactive','updated_at' => \Carbon\Carbon::now()]);
            DB::table('tblreservations')->where('Res_id', $Res_id)->update(['status' => 'notactive','updated_at' => \Carbon\Carbon::now()]);
            return redirect()->route('reservations');

    }
    
}
