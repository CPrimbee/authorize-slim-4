<?php

declare(strict_types=1);

use App\Http\HttpKernel;
use DI\Container;
use DI\Bridge\Slim\Bridge as App;

$app = App::create(new Container);

return HttpKernel::bootstrap($app)->getApplication();
