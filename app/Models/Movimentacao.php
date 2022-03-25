<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
  protected $table = 'movimentacao';
  protected $fillable = [
    'tipo_movimentacao',
    'valor',
    'observacao',
  ];

  const CREATED_AT = 'data_criacao';
  const UPDATED_AT = 'data_alteracao';
  use HasFactory;
}
