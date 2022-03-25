<?php

namespace App\Repositories;

use App\Models\Oficial;
use App\Repositories\Interfaces\OficialRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;

class OficialRepository extends BaseEloquentRepository implements OficialRepositoryInterface
{
  protected $model = Oficial::class;
  private $OficialEloquent;

  public function __construct(Oficial $Oficial)
  {
    $this->OficialEloquent = $Oficial;

  }

  public function createOficial(Oficial $Oficial): Oficial
  {
    return $this->OficialEloquent
      ->create($Oficial);
  }

  public function updateOficial(Oficial $Oficial, int $id)
  {
    return $this->OficialEloquent
      ->find($id)
      ->fill($Oficial)
      ->save();
  }

  public function listAll(): Paginator
  {
    return $this->paginate('nome_completo', array('adiminstrator'));
  }
  public function deleteOficial(int $id)
  {
    return $this->OficialEloquent
      ->find($id)
      ->delete();
  }
}
