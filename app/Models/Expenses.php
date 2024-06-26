<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expenses extends Model
{
    use HasFactory;

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Categories::class);
    }

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
