<?php

namespace App\Models;
use App\Models\province;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    public function provinces() {
        return $this->belongsTo(Province::class);
    }
}
