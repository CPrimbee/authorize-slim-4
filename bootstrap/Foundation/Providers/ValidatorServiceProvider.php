<?php

declare(strict_types=1);

namespace Boot\Foundation\Providers;

use Boot\Foundation\Http\ValidatorFactory;
use Illuminate\Translation\Translator;

class ValidatorServiceProvider extends SlimServiceProvider
{
  public function register()
  {
    $this->app->bind(ValidatorFactory::class, fn (Translator $translator) => new ValidatorFactory($translator));
  }
}
