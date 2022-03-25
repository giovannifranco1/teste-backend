<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
  protected $table = 'funcionario';
  protected $fillable = [
    'nome_completo',
    'login',
    'senha',
    'saldo_atual',
    'administrador_id',
  ];

  const CREATED_AT = 'data_criacao';
  const UPDATED_AT = 'data_alteracao';

  use HasFactory;
}
