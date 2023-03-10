<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  protected $fillable = [
    'name',
    'user_id',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
