<?php

use App\Models\admin\FoodsCategory;
use App\Models\resturantowner\Restaurantowner;
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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Restaurantowner::class);//which restaurant owner makes the this food.
            $table->string('name');//name food.
            $table->string('rawmaterial');//material foods.
            $table->string('price');//food price.
            $table->string('image')->default('0');//image food.
            $table->string('foodsparty')->default('0');//food party.
            $table->string('foodscategory');//which food categor.
            $table->string('discounts')->default('0');//discount food.
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
        Schema::dropIfExists('foods');
    }
};
