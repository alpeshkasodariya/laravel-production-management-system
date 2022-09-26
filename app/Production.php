<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $table = 'productions';
    protected $fillable = [];
    protected $guarded = ['id']; 
    public $timestamps = true;
    
    public function mahatma()
    {
        return $this->belongsTo('App\Mahatma', 'name');
    }
}
?>