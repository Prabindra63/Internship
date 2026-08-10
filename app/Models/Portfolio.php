<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'client_name',
        'project_url',
        'featured_image',
        'gallery_images',
        'technologies_used',
        'completion_date',
        'status',
        'featured',
    ];

    protected function casts(): array
    {
        return [
            'gallery_images' => 'array',
            'technologies_used' => 'array',
            'completion_date' => 'date',
            'status' => 'boolean',
            'featured' => 'boolean',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (Portfolio $portfolio) {
            if (empty($portfolio->slug)) {
                $portfolio->slug = Str::slug($portfolio->title);
            }
        });
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }
}
