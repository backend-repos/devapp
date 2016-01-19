<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    //

    protected $fillable = ["content", "description","type","status","user_id"];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
