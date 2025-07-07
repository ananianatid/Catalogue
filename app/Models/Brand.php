<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded;
    public function getRouteKeyName()
    {
        return 'name'; // or 'slug' if you use slugs instead
    }
}
