<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
  protected $table = 'administrador';
  protected $fillable = [
    'nome_completo',
    'login',
    'senha',
  ];
  const CREATED_AT = 'data_criacao';
  const UPDATED_AT = 'data_alteracao';

  use HasFactory;
}
