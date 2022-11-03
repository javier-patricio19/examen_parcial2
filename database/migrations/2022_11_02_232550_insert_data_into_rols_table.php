<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Rol;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rols', function (Blueprint $table) {
            Rol::create([
                'type' => 'Gestor'
            ]);
            Rol::create([
                'type' => 'Invitado'
            ]);
            Rol::create([
                'type' => 'Ventas'
            ]);
            Rol::create([
                'type' => 'IT'
            ]);
            Rol::create([
                'type' => 'RH'
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
        Schema::table('rols', function (Blueprint $table) {
            Rol::truncate();
        });
    }
};
