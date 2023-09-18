<?php

namespace App\Models;
use App\Models\countries;
use App\Models\City;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    public function Countries() {
        return $this->belongsTo(Countries::class);
    }

    public function City() {
        return $this->hasMany(City::class);
    }
}
