<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Froga3 extends Model
{
    use HasFactory;

    protected $table = "Froga3";

    protected $primaryKey = "id";
 
    protected $fillable = ['izena'. 'id_pista'];

    public function Pistak(){

        return $this->belongsTo(Pistak::class);
            
        }
}
