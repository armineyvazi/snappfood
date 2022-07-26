<?php

use App\Models\api\Carts;
use App\Models\resturantowner\Restaurantowner;
use App\Models\resturantowner\ResturantFoods;
use App\Models\User;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Carts::class);
            $table->foreignIdFor(Restaurantowner::class);
            $table->foreignIdFor(User::class);
            $table->string('name');
            $table->string('foods_name');
            $table->string('total');
            $table->string('count');
            $table->string('phone');
            $table->string('email');
            $table->foreignIdFor(ResturantFoods::class);
            $table->string('orders_status');
            $table->string('comments')->nullable();
            $table->string('score')->nullable();
            $table->boolean('report')->default(false);
            $table->string('answer')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
