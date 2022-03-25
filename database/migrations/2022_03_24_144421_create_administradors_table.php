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
    Schema::create('administrador', function (Blueprint $table) {
      # Primary key
      $table->id();
      $table->string('nome_completo');
      $table->string('login');
      $table->string('senha');
      $table->dateTime('data_criacao');
      $table->dateTime('data_alteracao');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('administrador');
  }
};
