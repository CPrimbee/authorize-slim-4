<?php

declare(strict_types=1);

namespace App\Settings;

interface SettingsInterface
{
  public function get(string $key = '');
}
