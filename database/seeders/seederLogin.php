<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class seederLogin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User = new User();
        $User->name = "daniel";
        $User->email = "admin@gmail.com"; //hash make para desencriptar
        $User->password = Hash::make("12345678");
        $User->fullacces= 'yes';
        $User->codigo= 'adm1';
        $User->save();
    }
}
