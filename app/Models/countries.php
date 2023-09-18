<?php

namespace App\Models;
use App\Models\province;
use App\Models\City;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class countries extends Model
{
    public function provinces() {
        return $this->hasMany(province::class);
    }
    // public function City() {
    //     return $this->hasMany(City::class);
    // }
}
