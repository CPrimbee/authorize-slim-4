<?php

namespace App\Support;

use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface as Response;

class View
{
  protected Response $response;
  protected Blade $blade;

  public function __construct(Blade $blade, ResponseFactoryInterface $factory)
  {
    $this->blade = $blade;
    $this->response = $factory->createResponse(200, 'Success');
  }

  public function __invoke(string $template = '', array $with = []): Response
  {
    $view = $this->blade->make($template, $with)->render();

    $this->response->getBody()->write($view);

    return $this->response;
  }
}
