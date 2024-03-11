<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'project_name',
    ];

    public function files(): HasMany
    {
        return $this->hasMany(File::class);
    }

    public function userLanguages(): HasMany
    {
        return $this->hasMany(UserLanguage::class);
    }
}
