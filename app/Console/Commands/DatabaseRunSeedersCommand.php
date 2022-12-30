<?php

declare(strict_types=1);

namespace App\Console\Commands;

class DatabaseRunSeedersCommand extends Command
{
  protected $name = 'db:seed';
  protected $help = 'Seed Database Usin Seeders';
  protected $description = 'Run database seeders';

  public function handler()
  {
    shell_exec("./vendor/bin/phinx seed:run");
    $this->info("Successful (If no message is displayed above)");
  }
}
