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
    Schema::create('funcionario', function (Blueprint $table) {
      # Primary key
      $table->id();
      $table->string('nome_completo');
      $table->string('login');
      $table->string('senha');
      $table->decimal('saldo_atual');

      # Foreign key
      $table->foreignId('administrador_id')->constrained('administrador');
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
    Schema::dropIfExists('funcionarios');
  }
};
