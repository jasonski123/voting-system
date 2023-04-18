<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //admin account

        \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@test.com',
            'password' => Hash::make('hello123'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'username' => 'administrator',
            'email' => 'administrator@test.com',
            'password' => Hash::make('hello123'),
        ]);
    }
};
