<?php

declare(strict_types=1);

namespace App\Http;

use Boot\Foundation\HttpKernel as Kernel;

class HttpKernel extends Kernel
{
  /**
   * Global Middleware
   *
   * @var array
   */
  public array $middleware = [
    // Middleware\ExampleAfterMiddleware::class,
    // Middleware\ExampleBeforeMiddleware::class
  ];

  /**
   * Route Group Middleware
   */
  public array $middlewareGroups = [
    'api' => [],
    'web' => [
      'csrf',
      Middleware\RouteContextMiddleware::class
    ]
  ];
}
