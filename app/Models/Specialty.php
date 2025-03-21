<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Specialty extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function doctors(): HasOne
    {
        return $this->hasOne(Doctor::class);
    }
}
