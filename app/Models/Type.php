<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    
// (type.php) type has many projects/ dobboamo fare l'inverso nel (project.php)per project
    public function projects(){
        return $this->hasMany(Ptoject::class); 
    }
}

