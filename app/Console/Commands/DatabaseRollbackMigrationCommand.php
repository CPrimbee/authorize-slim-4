<?php

declare(strict_types=1);

namespace App\Console\Commands;

class DatabaseRollbackMigrationCommand extends Command
{
  protected $name = 'migrate:rollback';
  protected $help = 'Rollback Database Migration Command';
  protected $description = 'Migration migrations to database';

  public function handler()
  {
    shell_exec("./vendor/bin/phinx rollback");
    $this->info("Successful (If this message is the only message, Errors show above)");
  }
}
