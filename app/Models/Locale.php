<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Locale extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'language_id',
    ];

    protected $guarded = [
        'id'
    ];

    public function language(): HasOne
    {
        return $this->hasOne(Language::class);
    }
}
