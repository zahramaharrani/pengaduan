<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Masyarakat;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = User::create([
        	'nama'=> 'zahra',
        	'username'=> 'masyarakat',
        	'password'=> bcrypt('123456'),
        	'level'=>'masyarakat'
        ]);

        Masyarakat::create([
            'nik'=> '1234567890987654', //16
            'nama' => $user->nama,
            'username' => $user->nama,
            'password'=> bcrypt($user->password),
            'telp' => '089532498567',
            'user_id' => $user->id,
        ]);
    }
}
