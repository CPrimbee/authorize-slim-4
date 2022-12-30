<?php

declare(strict_types=1);

namespace App\Console\Commands;

class DatabaseMigrateCommand extends Command
{
  protected $name = 'db:migrate';
  protected $help = 'Run all migrations';
  protected $description = 'Migration migrations to database';

  public function handler()
  {
    shell_exec("./vendor/bin/phinx migrate");
    $this->info("Successful when no error show above");
  }
}
