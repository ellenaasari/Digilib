<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'gender' => 'l',
            'password' => '12345678'
        ]);        
        // Pegawai
        $user = User::create([
            'name' => 'Siti Hotijah',
            'email' => 'pustakawan@gmail.com',
            'gender'=>'l',
            'password' => '12345678'
        ]);
         // Anggota
        $user = User::create([
            'code' => 'agt-1-rpl1-2005',
            'name' => 'Helen Dwi Hapsari',
            'email' => 'student@gmail.com',
            'gender'=>'l',
            'password' => '12345678'
        ]);
        $user = User::create([
            'code' => 'agt-2-rpl2-2005',
            'name' => 'Noviana',
            'email' => 'user@gmail.com',
            'gender'=>'l',
            'password' => '12345678'
        ]);
    }
}
