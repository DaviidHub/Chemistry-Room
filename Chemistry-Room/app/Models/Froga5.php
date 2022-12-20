<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Froga5 extends Model
{
    use HasFactory;

    protected $table = "Froga5";

    protected $primaryKey = "id";
 
    protected $fillable = ['izena', 'taldea' ,'id_pista'];

    public function Pistak(){

        return $this->belongsTo(Pistak::class);
            
        }
}