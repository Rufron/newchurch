<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddSermon extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'text',
        'notes',
        'author',
    ];
}
