<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Coach;
use App\Models\Scout;
use App\Models\Message;
use App\Models\Onwatch;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'role',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function coach(): HasOne
    {
        return $this->hasOne(Coach::class);
    }

    public function scout(): HasOne
    {
        return $this->hasOne(Scout::class);
    }
    
    public function onwatch(): HasMany
    {
        return $this->hasMany(Onwatch::class);
    }

    public function messagesSent(): HasMany
    {
        return $this->hasMany(Message::class, 'from_user_id');
    }

    public function messagesReceived(): HasMany
    {
        return $this->hasMany(Message::class, 'to_user_id');
    }
}
