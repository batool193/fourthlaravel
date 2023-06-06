<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Family extends Model
{
    use HasFactory;
    protected $fillable = ['national_number','name','phone','place_id'];

    public function place(): BelongsTo
{
    return $this->belongsTo(Place::class);
}
}
