<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FuncionarioRequest;
use App\Models\Funcionario;
use App\Services\FuncionarioService;
use Exception;

class FuncionarioController extends Controller
{
  protected $funcionarioService;

  public function __construct(FuncionarioService $funcionarioService)
  {
    # code...
  }

  public function index()
  {

  }

  public function edit()
  {

  }

  public function store(FuncionarioRequest $request)
  {
    try {
      $this->funcionarioService->criarFuncionario(new Funcionario($request->all()));
    } catch (Exception $e) {

    }
  }

  public function update()
  {

  }

  public function destroy()
  {

  }
}
