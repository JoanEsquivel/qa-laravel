<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //atributes for mass assignment
    protected $fillable = ['title', 'body'];

    public function user(){
        //
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value){
        $this->attributes['title']=$value;
        $this->attributes['slug'] = Str::slug($value);
    }
    
}
