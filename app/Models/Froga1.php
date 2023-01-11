<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Froga1 extends Model
{
    use HasFactory;

        
   protected $table = "Froga1";

   protected $primaryKey = "id";

   protected $fillable = ['bideak', 'ezaugarriak', 'id_pista'];

   public function Pistak(){

    return $this->belongsTo(Pistak::class);
        
    }

}
