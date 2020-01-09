<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function courses(){
        return $this->hasMany('App\Courses');
    }
    protected $fillable=['name','Slug'];
}
