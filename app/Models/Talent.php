<?php

namespace App\Models;

use App\Models\Coach;
use App\Models\Onwatch;
use App\Models\Outfieldkey;
use App\Models\Goalkeeperkey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Talent extends Model
{
    use HasFactory;

    protected $fillable = [
        'talent_name',
        'age',
        'gender',
        'address',
        'weight',
        'height',
        'position',
        'foot',
        'rating',
        'status',
        'photo',
        'video',
        'coach_id'
    ];

    public function coach(): BelongsTo
    {
        return $this->belongsTo(Coach::class);
    }

    public function outfieldkeys(): HasOne
    {
        return $this->hasOne(Outfieldkey::class);
    }

    public function goalkeeperkeys(): HasOne
    {
        return $this->hasOne(Goalkeeperkey::class);
    }
    
    public function onwatched(): HasMany
    {
        return $this->hasMany(Onwatch::class);
    }

    public function scopeSearch($query, $value)
    {
        $query->where('talent_name','like',"%($value)%")->orWhere('position','like',"%($value)%");
    }
}
