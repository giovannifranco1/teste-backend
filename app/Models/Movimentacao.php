<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
  protected $created_at = 'data_criacao';
  protected $updated_at = 'data_altercao';
  protected $table = 'movimentacao';
  protected $fillable = [
    'tipo_movimentacao',
    'valor',
    'observacao',
  ];
  use HasFactory;
}
