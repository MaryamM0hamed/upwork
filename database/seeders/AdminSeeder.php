<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Admin::create([
            'name'=> 'Maryam Mohammed',
            'email'=>'maryam@gmail.com',
            'email_verified_at'=>now(),
            'password'=>bcrypt(123456789)

        ]);
    }
}
