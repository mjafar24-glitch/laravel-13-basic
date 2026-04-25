<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illmuinate\Database\Eloquent\Attributes\Fillable;
use Illmuinate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name'])]
class Department extends Model
{
    public function  lecturers(): HasMany
    {
        return $this->hasMany(Lecturer::class);
    }
}