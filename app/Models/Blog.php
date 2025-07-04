<?php

namespace App\Models;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class Blog extends Model
{
    use HasFactory, AsSource, Sluggable, Attachable;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'author',
        'active'
    ];
}
