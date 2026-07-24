<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name', 'phone', 'email', 'country_interested',
        'position_interested', 'message', 'resume_path', 'vacancy_id', 'status',
    ];

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
