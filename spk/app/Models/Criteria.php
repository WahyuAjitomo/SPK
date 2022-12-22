<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    protected $table = 'Criterias';

    protected $fillable = [
        'code', 'name', 'bobot', 'slug_criteria'
    ];
}
