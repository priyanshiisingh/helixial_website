<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class OutreachActivity extends Model
{
    use HasFactory, AsSource, Attachable;

    protected $table = "outreach_activity";
        protected $fillable = [
        'title',
        'description',
        'active'
    ];
}
