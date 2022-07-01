<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\resturantowner\Restaurantowner;

return new class extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('saturday');
            $table->string('sunday');
            $table->string('monday');
            $table->string('thuesday');
            $table->string('wednesday');
            $table->string('thursday');
            $table->string('friday');
            $table->foreignIdFor(Restaurantowner::class);
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
        Schema::dropIfExists('schedules');
    }
};
