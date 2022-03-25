<?php

namespace App\Repositories\Interfaces;

use App\Models\Funcionario;
use Illuminate\Contracts\Pagination\Paginator;

interface FuncionarioRepositoryInterface
{
  public function __construct(Funcionario $funcionario);
  public function criarFuncionario(Funcionario $funcionario): Funcionario;
  public function alterarFuncionario(Funcionario $funcionario, int $id);
  public function listarTodos(): Paginator;
  public function excluirFuncionario(int $id);
}
