<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tblcashier;
use DB;

class tblcashierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (tblcashier::count() == 0) {
            tblcashier::factory(20)->create();
        }

        DB::table('tblcashiers')->insert([
            'First_Name' => 'Gianna',
            'Last_Name' => 'Palmes',
            'username' => 'gianneyy',
            'password' => '071600',
            'status' => 'active',
            'Address' => '515- a Marang St., Tigatto, Davao City',
            'Phone_no' => '09070101032',
            'Email' => 'palmesgianna74@gmail.com',
            'gender' => 'Female',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
    }
}
