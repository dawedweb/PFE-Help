<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    public function teacher() {
        return $this->belongsTo(User::class, 'id');
    }
}
