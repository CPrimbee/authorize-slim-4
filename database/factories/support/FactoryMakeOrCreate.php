<?php

declare(strict_types=1);

use Faker\Factory;
use Illuminate\Support\Collection;

class FactoryMakeOrCreate
{
  public $model;
  public $count;
  public $defaultAttributes;

  public function __construct($model, $count, $defaultAttributes)
  {
    $this->model = $model;
    $this->count = $count;
    $this->defaultAttributes = $defaultAttributes;
  }

  public static function options(...$arguments)
  {
    return new static(...$arguments);
  }

  /**
   * Create persists to the database
   *
   * @param array $attributes
   * @return Collection
   */
  public function create($attributes = []): Collection
  {
    $model = $this->model;
    $default = $this->defaultAttributes;

    $created = collect([]);

    for ($creating = 1; $creating <= $this->count; $creating++) {
      $created->push(
        $model::forceCreate(
          array_merge($default(Factory::create()), $attributes)
        )
      );
    }

    return $created;
  }

  /**
   * Make does not save the model to the database
   *
   * @param array $attributes
   * @return Collection
   */
  public function make($attributes = []): Collection
  {
    $model = $this->model;
    $default = $this->defaultAttributes;

    $made = collect([]);

    for ($making = 1; $making <= $this->count; $making++) {
      $made->push(
        $model::make(
          array_merge($default(Factory::create()), $attributes)
        )
      );
    }

    return $made;
  }
}
