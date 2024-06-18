<?php

namespace App\Models;

use App\Models\User;
use App\Models\Talent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Onwatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'talent_id',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function talent(): BelongsTo
    {
        return $this->belongsTo(Talent::class, 'talent_id');
    }
}
