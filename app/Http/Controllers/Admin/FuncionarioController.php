<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OficialRequest;
use App\Models\Oficial;
use App\Services\OficialService;
use Exception;

class OficialController extends Controller
{
  protected $OficialService;

  public function __construct(OficialService $OficialService)
  {
    # code...
  }

  public function index()
  {

  }

  public function edit()
  {

  }

  public function store(OficialRequest $request)
  {
    try {
      $this->OficialService->criarOficial(new Oficial($request->all()));
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
