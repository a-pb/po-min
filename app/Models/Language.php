<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Language extends Model
{
    use HasFactory;

    public function loaded(): HasMany
    {
        return $this->hasMany(LanguagesLoaded::class, 'language_id', 'id');
    }
}
