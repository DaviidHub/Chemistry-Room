<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Froga4 extends Model
{
    use HasFactory;

    protected $table = "Froga4";

    protected $primaryKey = "id";
 
    protected $fillable = ['galdera', 'erantzuna', 'medio', 'id_pista'];

    public function Pistak(){

        return $this->belongsTo(Pistak::class);
            
        }
}
