<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compaine extends Model
{
  
    use HasFactory;

    protected $table = 'compaines';
    
    protected $fillable = [
        'name',
        'email',
        'website'
    ];


    protected $hidden = [ ];

}
