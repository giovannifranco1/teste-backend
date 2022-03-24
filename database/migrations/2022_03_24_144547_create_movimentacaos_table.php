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
    Schema::create('movimentacao', function (Blueprint $table) {
      # Primary key
      $table->id();
      $table->enum('tipo_movimentacao', ['entrada', 'saida']);
      $table->decimal('valor');
      $table->string('observacao', 300);

      # Foreign key
      $table->foreignId('funcionario_id')->constrained('funcionario')->onDelete('cascade')->onUpdate('cascade');
      $table->foreignId('administrador_id')->constrained('administrador')->onDelete('cascade')->onUpdate('cascade');
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
    Schema::dropIfExists('movimentacaos');
  }
};
