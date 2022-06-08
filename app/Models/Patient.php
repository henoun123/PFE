<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['nom','prenom','telephone','genre','date_naissance','date_reception'];
    
    public function patologies()
    {
        return $this->belongsToMany('App\models\patologie','patiant_patologies','patiant_id','patologie_id');
    }

    public function examens()
    {
        return $this->hasMany(examen::class);
    }
    
    
    

}
