<?php

declare(strict_types=1);

namespace App\Console\Commands;

class ServerCommand extends Command
{
  protected $name = 'serve';
  protected $help = 'Serve Project';
  protected $description = 'Start the development server';

  protected function options()
  {
    return [
      '--host' => $this->optionRequire(null, 'Host', 'localhost'),
      '--port' => $this->optionRequire('-p', 'Port', 8000)
    ];
  }

  public function handler()
  {
    $host = $this->input->getOption('host');
    $port = $this->input->getOption('port');
    $command = "php -S $host:$port -t public";

    $this->info("Server listening on http://$host:$port 🚀");
    shell_exec($command);
  }
}
