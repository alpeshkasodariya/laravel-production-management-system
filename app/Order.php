<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [];
    protected $guarded = ['id']; 
    public $timestamps = true;
    
    public function mahatma()
    {
        return $this->belongsTo('App\Mahatma', 'name');
    }
}
?>