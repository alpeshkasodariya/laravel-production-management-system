<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KachomalStock extends Model
{
    protected $table = 'kachomal_stock';
    protected $fillable = [];
    protected $guarded = ['id']; 
    public $timestamps = true;
    
     
}
?>