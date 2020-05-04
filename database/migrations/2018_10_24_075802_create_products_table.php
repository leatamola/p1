<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->increments('id');
          $table->integer('categories_id');
          $table->string('p_name')->nullable();
          $table->string('barrios_id')->nullable();
          $table->string('title')->nullable();
          $table->string('p_code')->nullable();
          $table->string('p_color')->nullable();
          $table->text('short')->nullable();
          $table->text('description')->nullable();
          $table->text('description2')->nullable();
          $table->text('horario')->nullable();
          $table->string('tel')->nullable();
          $table->string('tel2')->nullable();
          $table->string('whatsapp')->nullable();
          $table->string('whatsapp2')->nullable();
          $table->string('adress')->nullable();
          $table->string('email')->nullable();
          $table->string('facebook')->nullable();
          $table->string('instagram')->nullable();
          $table->string('twitter')->nullable();
          $table->string('youtube')->nullable();
          $table->float('price')->nullable();
          $table->text('googleMaps')->nullable();
          $table->string('image')->default('default.jpg');
          $table->tinyInteger('destacado')->default(0);
          $table->tinyInteger('cuarentena')->default(0);
          $table->string('banner')->nullable();
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
        Schema::dropIfExists('products');
    }
}
