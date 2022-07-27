<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\resturantowner\Restaurantowner;
use App\Models\resturantowner\ResturantFoods;
use App\Models\api\Carts;
use App\Models\User;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Restaurantowner::class);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Carts::class);
            $table->string('name');
            $table->string('foodName');
            $table->boolean('report')->default(false);
            $table->string('answer')->nullable();
            $table->string('message');
            $table->string('score')->nullable();
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
        Schema::dropIfExists('comments');
    }
};
