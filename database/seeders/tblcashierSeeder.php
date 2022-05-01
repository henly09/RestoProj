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
            'First_Name' => 'John Henly',
            'Last_Name' => 'Montera',
            'username' => 'awtsgege',
            'password' => '123123',
            'status' => 'active',
            'Address' => 'Rolls Royce St., Jerome, Agdao, Davao City',
            'Phone_no' => '09633473223',
            'Email' => 'monterahens@gmail.com',
            'gender' => 'Male',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
    }
}
