<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ["brand", "model", "generation"];

    public function brands()
    {
        return $this->belongsTo(Brand::class);
    }
}
