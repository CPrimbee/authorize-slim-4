<?php

declare(strict_types=1);

namespace Boot\Foundation\Bootstrappers;

use Carbon\Carbon;
use Jenssegers\Blade\Blade;
use App\Support\RequestInput;
use Illuminate\Filesystem\Filesystem;
use Zeuxisoo\Whoops\Slim\WhoopsMiddleware;

class LoadDebuggingPage extends Bootstrapper
{
  public function boot()
  {
    $whoops = function ($exception, $inspector, $run) {
      $message = $exception->getMessage();
      $title = $inspector->getExceptionName();
      $stack = $exception->getTrace();
      $blade = $this->app->resolve(Blade::class);
      $input = ($this->app->resolve(RequestInput::class))->all();

      $with = compact('exception', 'inspector', 'run', 'title', 'message', 'input', 'stack');

      $debug_page = $blade->make('exceptions.whoops', $with)->render();

      $time = Carbon::now();
      $path = storage_path("error_logs/{$time} {$title}.html");

      $filesystem = app()->resolve(Filesystem::class);

      $filesystem->put($path, $debug_page);
      echo $debug_page;
      exit;
    };

    $this->app->bind('whoops', new WhoopsMiddleware([], [$whoops]));

    if (env('APP_DEBUG', false)) {
      $this->app->add(app()->resolve('whoops'));
    }
  }
}
