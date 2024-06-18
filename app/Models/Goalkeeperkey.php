<?php

namespace App\Models;

use App\Models\Talent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Goalkeeperkey extends Model
{
    use HasFactory;

    protected $fillable = [
        'talent_id',
        'diving',
        'handling',
        'kicking',
        'reflexes',
        'speed',
        'positioning'
    ];

    public function talent(): BelongsTo
    {
        return $this->belongsTo(Talent::class);
    }
}
