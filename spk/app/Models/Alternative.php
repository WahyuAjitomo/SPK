<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    public function komponen(){
        return $this->belongsTo('App\Models\Komponen');
    }
    public function criteria(){
        return $this->belongsTo('App\Models\Criteria');
    }
    
    protected $table = 'Alternatives';

    protected $fillable = [
        'code_alternative', 'komponen_id', 'criteria_id', 'name_alternative'
    ];
}
