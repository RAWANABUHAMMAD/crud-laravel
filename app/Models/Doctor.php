<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'specialty_id'];
     
    public function specialty(): BelongsTo
    {
        return $this->belongsTo(Specialty::class);
    }
  

}
   