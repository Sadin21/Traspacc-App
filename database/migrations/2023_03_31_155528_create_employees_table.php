<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('nip');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('eselon');
            $table->integer('npwp');
            $table->unsignedBigInteger('id_position');
            $table->unsignedBigInteger('id_position_class');
            $table->unsignedBigInteger('id_work_unit');
            $table->timestamps();


            $table->foreign('id_position')->references('id')->on('positions');
            $table->foreign('id_position_class')->references('id')->on('position_classes');
            $table->foreign('id_work_unit')->references('id')->on('work_units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
