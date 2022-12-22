<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;

class ApiController
{
  public function index(Response $response)
  {
    $response->getBody()->write(json_encode([
      'hello' => 'world'
    ], JSON_PRETTY_PRINT));

    return $response;
  }
}
