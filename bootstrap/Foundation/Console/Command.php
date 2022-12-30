<?php

declare(strict_types=1);

namespace Boot\Foundation\Console;

use Symfony\Component\Console\Input\InputArgument as Arg;
use Symfony\Component\Console\Input\InputOption as Opt;

class Command extends Console
{
  protected $name = 'command:add-signature';
  protected $help = 'Add command help info';
  protected $description = 'Add command description information';

  protected function require($description = '')
  {
    return  [Arg::REQUIRED, $description];
  }

  protected function array($description = '', $default = [])
  {
    return [Arg::IS_ARRAY, $description, $default];
  }

  protected function optional($description = '', $default = false)
  {
    return $default
      ? [Arg::OPTIONAL, $description, $default]
      : [Arg::OPTIONAL, $description];
  }

  protected function arguments()
  {
    return [
      'name' => ['array', 'of', 'options']
      // Add Command Arguments
    ];
  }

  protected function optionRequire($shortcut, $description = '', $default = [])
  {
    return [$shortcut, Opt::VALUE_REQUIRED, $description, $default];
  }

  protected function optionArray($shortcut, $description = '', $default = [])
  {
    return [$shortcut, Opt::VALUE_IS_ARRAY, $description, $default];
  }

  protected function optionOptional($shortcut, $description = '', $default = false)
  {
    return $default
      ? [$shortcut, Opt::VALUE_OPTIONAL, $description, $default]
      : [$shortcut, Opt::VALUE_OPTIONAL, $description];
  }

  protected function options()
  {
    return [
      '--option' => ['array', 'of', 'options']
    ];
  }

  protected function configure()
  {
    $this->setName($this->name)
      ->setHelp($this->help)
      ->setDescription($this->description);

    collect($this->arguments())->each(
      fn ($options, $name) => $this->addArgument($name, ...$options)
    );

    collect($this->options())->each(
      fn ($options, $option) => $this->addOption($option, ...$options)
    );
  }

  public function handler()
  {
    // Handle Command
  }
}
