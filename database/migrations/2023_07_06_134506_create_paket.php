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
        Schema::create('pakets', function(Blueprint $table){
            $table->id();
            $table->text('resi')->unique();
            $table->text('data_paket');
            $table->text('biaya_paket');
            $table->text('vendor_paket')->nullable();
            $table->text('history_paket');
            $table->enum('status_paket', ['proses', 'selesai', 'cancel'])->default('proses');
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
        Schema::dropIfExists('pakets');
    }
};
