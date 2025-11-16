<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'full_description',
        'writer',
        'release_date',
        'image',
        'major_category'
    ];

    protected $casts = [
        'release_date' => 'datetime',
    ];

    public function scopeByWriter($query, $writerName)
    {
        return $query->where('writer', $writerName);
    }

    public function scopeByMajor($query, $majorCategory)
    {
        return $query->where('major_category', $majorCategory);
    }

    public function getFormattedReleaseDateAttribute()
    {
        return $this->release_date->format('M d, Y');
    }
}
