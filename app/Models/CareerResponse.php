<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class CareerResponse extends Model
{
        use HasFactory, AsSource;
    protected $table ="career_responses";
    protected $fillable=[
        'name',
        'email',
        'job_title',
    ];
}
