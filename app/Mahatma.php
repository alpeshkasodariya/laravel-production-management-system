<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahatma extends Model
{
    protected $table = 'mahatma_list';
    protected $fillable = [];
    protected $guarded = ['id']; 
    public $timestamps = true;
}
?>