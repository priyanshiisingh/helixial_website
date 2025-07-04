<?php

namespace App\Models;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class CaseStudy extends Model
{
    use HasFactory, AsSource, Sluggable;

    protected $fillable =[
        'title',
        'slug',
        'description',
        'active'
    ];

}
