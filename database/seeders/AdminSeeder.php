<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obj = new  Admin();
        $obj->name= 'Super Admin';
        $obj->email= 'vuyelaharile@gmail.com';
        $obj->password= Hash::make(205060);
        $obj->admin_id= 'ADM01';
        $obj->role= 'super_admin';
        $obj->phone= 676855069;
        $obj->is_active = true;
        $obj->save();
    }
}
