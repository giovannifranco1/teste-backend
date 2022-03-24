<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
  protected $created_at = 'data_criacao';
  protected $updated_at = 'data_altercao';
  protected $table = 'funcionario';
  protected $fillable = [
    'nome_completo',
    'login',
    'senha',
    'saldo_atual',
    'administrador_id',
  ];
  
  use HasFactory;
}
