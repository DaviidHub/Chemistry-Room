<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Erabiltzaileak extends Model
{
 
    use HasFactory;
    
   protected $table = "Erabiltzaileak";

   protected $primaryKey = "id";

   protected $fillable = ['izena', 'abizenak', 'mail', 'pasahitza', 'rol'];

}
