<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class AdvisoryBoard extends Model
{
    use HasFactory, AsSource, Attachable;

    protected $table = "advisory_board";
        protected $fillable = [
        'name',
        'description',
        'active'
    ];
}
