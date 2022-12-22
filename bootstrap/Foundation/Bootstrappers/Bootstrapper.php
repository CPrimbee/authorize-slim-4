<?php

declare(strict_types=1);

namespace Boot\Foundation\Bootstrappers;

use Slim\App;

class Bootstrapper
{
  public App $app;

  final public function __construct(App &$app)
  {
    $this->app = $app;
  }

  final public static function setup(App &$app, array $loaders)
  {
    $loaders = array_map(fn ($loaders) => new $loaders($app), $loaders);

    array_walk($loaders, fn (Bootstrapper $boot) => $boot->beforeBoot());
    array_walk($loaders, fn (Bootstrapper $boot) => $boot->boot());
    array_walk($loaders, fn (Bootstrapper $boot) => $boot->afterBoot());
  }

  public function beforeBoot()
  {
    //
  }

  public function boot()
  {
    //
  }

  public function afterBoot()
  {
    //
  }
}
