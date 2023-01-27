<?php

declare(strict_types=1);

namespace App\Console;

use Boot\Foundation\ConsoleKernel as Kernel;

class ConsoleKernel extends Kernel
{
  public array $commands = [
    Commands\ServerCommand::class,
    Commands\ViewClearCommand::class,
    Commands\MakeSeederCommand::class,
    Commands\DatabaseFreshCommand::class,
    Commands\MakeMigrationCommand::class,
    Commands\DatabaseMigrateCommand::class,
    Commands\DatabaseRunSeedersCommand::class,
    Commands\DatabaseTableDisplayCommand::class,
    Commands\DatabaseRollbackMigrationCommand::class
  ];
}
