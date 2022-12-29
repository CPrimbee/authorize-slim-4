<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\User;
use Psr\Http\Message\ResponseInterface as Response;

class ApiController
{
  public function index(Response $response, User $user)
  {
    $response->getBody()->write(json_encode($user::get(), JSON_PRETTY_PRINT));

    return $response;
  }
}
