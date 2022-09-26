<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kachomal extends Model
{
    protected $table = 'kachomal';
    protected $fillable = [];
    protected $guarded = ['id']; 
    public $timestamps = true;
    
     
}
?>