<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puzzle extends Model
{
    use HasFactory;
    protected $table = 'puzzle';

    protected $fillable = [
        'title',
        'description',
        'comment',
        'details'
    ];
}
