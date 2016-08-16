<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $table = 'statuses';

    protected $fillable = [
        'body'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    public function scopeNotReply($query){
        return $query->whereNull('parent_id');
    }
}
