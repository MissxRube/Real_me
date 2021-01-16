<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCgiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cgies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('viedo', 255)->nullable();
            $table->string('topproductname', 255)->nullable();
            $table->string('topproducttag', 255)->nullable();
            $table->string('topproductpic', 255)->nullable();
            $table->string('topproducturl', 255)->nullable();
            $table->string('peoplename', 255)->nullable();
            $table->string('peopledesc', 255)->nullable();
            $table->string('peoplepic', 255)->nullable();
            $table->string('Demachydesc', 255)->nullable();
            $table->string('bannerpic', 255)->nullable();
            $table->string('productpic', 255)->nullable();
            $table->string('productname', 255)->nullable();
            $table->string('producturl', 255)->nullable();
            $table->string('richness', 255)->nullable();
            $table->integer('price')->default(1);
            $table->string('desc', 500)->nullable();
            $table->boolean('enabled')->default(true);
            $table->integer('sort')->default(0);
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
        Schema::dropIfExists('cgies');
    }
}
