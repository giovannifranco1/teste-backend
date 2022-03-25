<?php

namespace App\Providers;

use App\Repositories\FuncionarioRepository;
use App\Repositories\Interfaces\FuncionarioRepositoryInterface;
use App\Repositories\Interfaces\MovimentacaoRepositoryInterface;
use App\Repositories\MovimentacaoRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
  # Array repositories
  protected $repositories = [
    FuncionarioRepositoryInterface::class => FuncionarioRepository::class,
    MovimentacaoRepositoryInterface::class => MovimentacaoRepository::class,
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
