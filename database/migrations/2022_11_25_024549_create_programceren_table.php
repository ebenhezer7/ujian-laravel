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
        Schema::create('programceren', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('namaguru');
            $table->string('jk');
            $table->string('mapel');
            $table->string('walikelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programceren');
    }
};
