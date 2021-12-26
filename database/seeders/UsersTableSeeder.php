<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'name'=>'Falah Robbani',
               'username'=>'manager',
               'role_id'=>1,
               'password'=> bcrypt('manager'),
            ],
            [
               'name'=>'Nama Owner',
               'username'=>'owner',
               'role_id'=>2,
               'password'=> bcrypt('owner'),
            ],
            [
               'name'=>'Nama Pengawas',
               'username'=>'pengawas',
               'role_id'=>3,
               'password'=> bcrypt('pengawas'),
            ],
            [
                'name'=>'Nama P.Lapangan',
                'username'=>'lapangan',
                'role_id'=>4,
                'password'=> bcrypt('lapangan'),
             ],
        ];
  
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    
    }
}
