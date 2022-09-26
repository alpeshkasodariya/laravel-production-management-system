<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'delivery';
    protected $fillable = [];
    protected $guarded = ['id']; 
    public $timestamps = true;
    
    public function mahatma()
    {
        return $this->belongsTo('App\Mahatma', 'name');
    }
}
?>