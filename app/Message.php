<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'message',
        'author',
        
    ];

    public function rules(){
        return[
            'author' => 'required',
            'message' => 'required'
        ];
    }
}
