<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tblcustomers', function (Blueprint $table) {
            $table->increments('Cust_id');
            $table->string('cust_Fname');
            $table->string('cust_Lname');
            $table->string('status');
            $table->string('cust_Address');
            $table->string('cust_Phone');
            $table->string('gender');
            $table->timestamps();
        });

        Schema::create('tblcashiers', function (Blueprint $table) {
            $table->increments('C_id');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('status');
            $table->string('Address');
            $table->string('Phone_no');
            $table->string('Email');
            $table->string('gender');
            $table->timestamps();
        });

        Schema::create('tblpayments', function (Blueprint $table) {
            $table->increments('Payment_no');
            $table->unsignedInteger('Cust_id');  // foreign key assignation
            $table->foreign('Cust_id')->references('Cust_id')->on('tblcustomers')->onDelete('NO ACTION')->onUpdate('NO ACTION'); // foreign key assignation
            $table->string('Name_of_customer');
            $table->unsignedInteger('C_id');
            $table->foreign('C_id')->references('C_id')->on('tblcashiers')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->string('Name_of_cashier');
            $table->string('status');
            $table->string('Total_amount');
            $table->timestamps();
        });

        Schema::create('tblreservations', function (Blueprint $table) {
            $table->increments('Res_id');
            $table->unsignedInteger('Cust_id');
            $table->foreign('Cust_id')->references('Cust_id')->on('tblcustomers')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->unsignedInteger('Payment_no');
            $table->foreign('Payment_no')->references('Payment_no')->on('tblpayments')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->unsignedInteger('C_id');
            $table->foreign('C_id')->references('C_id')->on('tblcashiers')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->string('status');
            $table->string('Fullname');
            $table->string('Address');
            $table->string('Res_event');
            $table->string('Contact_no');
            $table->string('No_of_person');
            $table->timestamp('Res_dateandtime')->useCurrent();
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblcashiers');
        Schema::dropIfExists('tblreservations');
        Schema::dropIfExists('tblpayments');
        Schema::dropIfExists('tblcustomers');
    }
};
