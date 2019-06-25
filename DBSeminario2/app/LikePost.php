<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikePost extends Model
{
    protected $table = 'LikesPosts';

    protected $primaryKey = ['account_id','post_id'];

    protected $fillable = ['account_id','post_id'];
}
