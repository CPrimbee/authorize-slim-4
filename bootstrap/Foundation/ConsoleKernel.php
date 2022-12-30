<?php

declare(strict_types=1);

namespace Boot\Foundation;

class ConsoleKernel extends Kernel
{
  public array $bootstrappers = [
    Bootstrappers\LoadEnvironmentDetector::class,
    Bootstrappers\LoadEnvironmentVariables::class,
    Bootstrappers\LoadAliases::class,
    Bootstrappers\LoadConsoleEnvironment::class,
    Bootstrappers\LoadServiceProviders::class,
  ];
}
