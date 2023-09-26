<?php

namespace Database\Seeders;

use App\Models\{User, Post};
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // insert default user 
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('textofiA@15853'),
                'role' =>   'admin',
                'valid' => 1
            ]
        ]);
    }

}
