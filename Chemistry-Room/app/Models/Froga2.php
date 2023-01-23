<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Froga2 extends Model
{
    use HasFactory;
            
   protected $table = "Froga2";

   protected $primaryKey = "id";

   protected $fillable = ['izena', 'argazkia', 'id_pista'];

   public function Pistak(){

    return $this->belongsTo(Pistak::class);
        
    }
}
