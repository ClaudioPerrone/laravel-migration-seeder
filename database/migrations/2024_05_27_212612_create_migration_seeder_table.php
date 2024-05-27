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
        Schema::create('migration_seeder', function (Blueprint $table) {
            $table->id();
            $table->string('company', 200);
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->dateTime('departure_dateTime');
            $table->dateTime('arrival_dateTime');
            $table->string('train_code', 20);
            $table->tinyInteger('wagon_number')->nullable();
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
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
        Schema::dropIfExists('migration_seeder');
    }
};
