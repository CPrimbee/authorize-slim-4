<?php

namespace App\Support;

use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface as Response;

function view(Response $response, $template, $with = [])
{
  $cache = config('blade.cache');
  $views = config('blade.views');

  $blade = (new Blade($views, $cache))->make($template, $with);

  $response->getBody()->write($blade->render());

  return $response;
}


class View
{
  public Response $response;
  public function __construct(ResponseFactoryInterface $factory)
  {
    $this->response = $factory->createResponse(200, 'Success');
  }

  public function __invoke(string $template = '', array $with = []): Response
  {
    $cache = config('blade.cache');
    $views = config('blade.views');

    $blade = (new Blade($views, $cache))->make($template, $with);

    $this->response->getBody()->write($blade->render());

    return $this->response;
  }
}
