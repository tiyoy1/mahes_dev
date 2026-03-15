<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'name',
        // 'class',
        // 'parents_name',
        // 'height',
        // 'weight',
        // 'birth_date',
        // 'social_media',
        // 'phone',
        // 'hobby',
        'reason',
    ];
}
