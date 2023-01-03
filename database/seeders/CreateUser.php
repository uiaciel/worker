<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CreateUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin Akagami";
        $user->email = "admin@akagami.id";
        $user->password = bcrypt('admin123'); 
        $user->save();

        $user = new User();
        $user->name = "Admin Japan Tuna";
        $user->email = "admin@japantuna.com";
        $user->password = bcrypt('admin123'); 
        $user->save();

        


    }
}
