<?php

namespace App\Repositories;

use App\Models\Funcionario;
use App\Repositories\Interfaces\FuncionarioRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;

class FuncionarioRepository extends BaseEloquentRepository implements FuncionarioRepositoryInterface
{
  protected $model = Funcionario::class;
  private $funcionarioEloquent;

  public function __construct(Funcionario $funcionario)
  {
    $this->funcionarioEloquent = $funcionario;

  }

  public function criarFuncionario(Funcionario $funcionario): Funcionario
  {
    return $this->funcionarioEloquent
      ->create($funcionario);
  }

  public function alterarFuncionario(Funcionario $funcionario, int $id)
  {
    return $this->funcionarioEloquent
      ->find($id)
      ->fill($funcionario)
      ->save();
  }

  public function listarTodos(): Paginator
  {
    return $this->paginate('nome_completo', array('adiminstrator'));
  }
  public function excluirFuncionario(int $id)
  {
    return $this->funcionarioEloquent
      ->find($id)
      ->delete();
  }
}
