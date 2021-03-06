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
    Schema::create('movement', function (Blueprint $table) {
      # Primary key
      $table->id();
      $table->enum('movement_type', ['entrence', 'exit']);
      $table->decimal('value');
      $table->string('note', 300);

      # Foreign key
      $table->foreignId('Employee_id')->constrained('Employee')->onDelete('cascade')->onUpdate('cascade');
      $table->foreignId('administrator_id')->constrained('administrator')->onDelete('cascade')->onUpdate('cascade');
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
    Schema::dropIfExists('movement');
  }
};
