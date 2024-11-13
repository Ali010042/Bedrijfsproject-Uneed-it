<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offerte', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('naam');
            $table->string('email')->unique(); // Email should be unique
            $table->string('onderwerp');
            $table->text('bericht');
            $table->timestamps(); // For created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offerte');
    }
}
