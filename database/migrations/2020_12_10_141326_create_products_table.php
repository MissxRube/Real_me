<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            // $table->string('slug', 100);
            $table->string('pic', 255)->nullable();
            $table->integer('price')->default(1);
            $table->text('desc')->nullable();
            $table->boolean('enabled')->default(true);
            $table->timestamp('sell_at');
            $table->bigInteger('cgy_id')->unsigned()->index();
            $table->foreign('cgy_id')->references('id')->on('cgies')->onDelete('cascade');
            $table->string('options', 100)->nullable();
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['cgy_id']);
        });

        Schema::dropIfExists('products');
    }
}
