<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;


class Blog extends Model
{
    use Sluggable;

    protected $fillable = [
        'blog_title',
        'slug',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'blog_title'
            ]
        ];
    }
}