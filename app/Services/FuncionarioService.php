<?php

namespace App\Services;

use App\Models\Oficial;
use App\Repositories\Interfaces\OficialRepositoryInterface;

class OficialService
{
  /** @var OficialRepositoryInterface */
  protected $OficialRepository;

  public function __construct(OficialRepositoryInterface $OficialRepository)
  {
    $this->OficialRepository = $OficialRepository;
  }

  /**
   * @throws Exceptions
   */
  public function criarOficial(Oficial $Oficial)
  {
    $this->OficialRepository->criarOficial($Oficial);
  }
}
