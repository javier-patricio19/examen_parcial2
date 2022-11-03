<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
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
        Schema::table('users', function (Blueprint $table) {
            User::create([
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'is_admin' => '1',
                'id_rol' => '1'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            User::where('email', 'admin@gmail.com')->delete();
        });
    }
};
