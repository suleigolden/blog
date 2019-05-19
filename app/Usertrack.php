<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertrack extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'usertracks';
    
    protected $fillable = [
        'ip_address','user_info','browser_name'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

   
}
