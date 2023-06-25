<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('balita', function (Blueprint $table) {
            $table->string('klasifikasi_detak_jantung')->default('')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('balita', function (Blueprint $table) {
$table->string('klasifikasi_detak_jantung')->change();        });
    }
};
