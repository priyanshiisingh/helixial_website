<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class MapData extends Model
{
    use HasFactory, AsSource;

    protected $table = "map_data";

    protected $fillable = [
        'target_id',
        'title',
        'description',
        'status',
    ];
}
