<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pistak extends Model
{
    use HasFactory;

    protected $table = "Pistak";

    protected $primaryKey = "id";
 
    protected $fillable = ['pista'];

    public function Froga1(){

        return $this->hasMany(Froga1::class);
            
        }

    public function Froga2(){

        return $this->hasMany(Froga2::class);
                
        }

    public function Froga3(){

        return $this->hasMany(Froga3::class);
                
        }
    
    public function Froga4(){
    
        return $this->hasMany(Froga4::class);
                  
        }

    public function Froga5(){

        return $this->hasMany(Froga5::class);
                    
        }
        
    public function Froga6(){
        
        return $this->hasMany(Froga6::class);
                       
        }


        

}
