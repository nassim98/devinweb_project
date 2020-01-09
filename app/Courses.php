<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table='courses';
    protected $fillable=['name','description','Slug'];
    function category(){
    $this->belongsTo('App\Categories');
    }
}
