<?php

namespace App\Services;

use App\Models\Funcionario;
use App\Repositories\Interfaces\FuncionarioRepositoryInterface;

class FuncionarioService
{
  /** @var FuncionarioRepositoryInterface */
  protected $funcionarioRepository;

  public function __construct(FuncionarioRepositoryInterface $funcionarioRepository)
  {
    $this->funcionarioRepository = $funcionarioRepository;
  }

  /**
   * @throws Exceptions
   */
  public function criarFuncionario(Funcionario $funcionario)
  {
    $this->funcionarioRepository->criarFuncionario($funcionario);
  }
}
