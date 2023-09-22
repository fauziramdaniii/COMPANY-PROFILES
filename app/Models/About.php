<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';
    protected $fillable = [
        'judul',
        'sub_judul',
        'description_1',
        'description_2',
        'strength_1',
        'strength_2',
        'strength_3',
        'strength_4',
    ];
}
