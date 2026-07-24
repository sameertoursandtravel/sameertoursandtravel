<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference_code', 'country', 'country_code', 'title', 'category',
        'summary', 'requirements', 'english_level', 'trc_assistance',
        'status', 'sort_order',
    ];

    protected $casts = [
        'trc_assistance' => 'boolean',
    ];

    public function enquiries()
    {
        return $this->hasMany(Enquiry::class);
    }

    public function scopeOpen($query)
    {
        return $query->where('status', 'open')->orderBy('sort_order');
    }

    /**
     * Render the ISO country code as a flag emoji for lightweight, dependency-free icons.
     */
    public function getFlagEmojiAttribute(): string
    {
        return collect(str_split(strtoupper($this->country_code)))
            ->map(fn ($c) => mb_chr(127397 + ord($c)))
            ->implode('');
    }
}
