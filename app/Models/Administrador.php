<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
  protected $created_at = 'data_criacao';
  protected $updated_at = 'data_altercao';
  protected $table = 'administrador';
  protected $fillable = [
    'nome_completo',
    'login',
    'senha',
  ];

  use HasFactory;
}
