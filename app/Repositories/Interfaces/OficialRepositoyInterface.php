<?php

namespace App\Repositories\Interfaces;

use App\Models\Oficial;
use Illuminate\Contracts\Pagination\Paginator;

interface OficialRepositoryInterface
{
  public function __construct(Oficial $funcionario);
  public function createOficial(Oficial $funcionario): Oficial;
  public function updateOficial(Oficial $funcionario, int $id);
  public function listAll(): Paginator;
  public function deleteOficial(int $id);
}
