<?php

namespace App\Providers;

use App\Repositories\Interfaces\MovementRepositoryInterface;
use App\Repositories\Interfaces\OficialRepositoryInterface;
use App\Repositories\MovementRepository;
use App\Repositories\OficialRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
  # Array repositories
  protected $repositories = [
    OficialRepositoryInterface::class => OficialRepository::class,
    MovementRepositoryInterface::class => MovementRepository::class,
  ];
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    foreach ($this->repositories as $interface => $implementation) {
      $this->app->bind($interface, $implementation);
    }
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    //
  }
}
