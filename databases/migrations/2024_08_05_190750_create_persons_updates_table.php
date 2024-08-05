<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsUpdatesTable extends Migration
{
    public function up(): void
    {
        Schema::create('persons_updates', function (Blueprint $table) {
            $table->id();
            $table->string('id_usuario');
            $table->foreignId('user_id');
            $table->dateTime('initial_date')->nullable()->default(null);
            $table->dateTime('final_date')->nullable()->default(null);
            $table->integer('id_cliente')->nullable()->default(null);
            $table->integer('id_ubicacion')->nullable()->default(null);
            $table->integer('id_puesto')->nullable()->default(null);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('persons_updates');
    }
}
