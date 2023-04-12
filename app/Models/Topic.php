<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
    
    //public function cornellNotes(): HasMany
    //{
      //  return $this->hasMany(cornellNotes::class);
    //}
}
