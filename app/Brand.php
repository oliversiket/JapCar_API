<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ["name", "description", "founded"];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
