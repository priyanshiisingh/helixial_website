<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Seo extends Model
{
    use HasFactory, AsSource;

    protected $table = "seo";
        protected $fillable = [
            'name',
            'value',
    ];
}
