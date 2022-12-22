<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
    public function criteria(){
        return $this->belongsTo('App\Models\Criteria');
    }
    
    protected $table = 'Komponens';

    protected $fillable = [
        'nama_komponen', 'nilai', 'criteria_id'
    ];
}
