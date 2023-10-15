<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable =[
        'image',
        'title',
        'description',
        'type_id',
    ];
    
    //project belongs to type
    public function type(){
        return $this->belongsTo(Type::class);
    }
}
