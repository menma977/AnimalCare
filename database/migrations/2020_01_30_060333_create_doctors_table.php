<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('doctors', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('user');
      $table->integer('str');
      $table->integer('price')->default(10000);
      $table->text('title');
      $table->text('place');
      $table->text('address');
      $table->text('graduated');
      $table->text('active');
      $table->text('unactivated');
      $table->integer('bank');
      $table->integer('account_number');
      $table->text('ovo')->nullable();
      $table->text('dana')->nullable();
      $table->integer('rate')->nullable();
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
    Schema::dropIfExists('doctors');
  }
}
