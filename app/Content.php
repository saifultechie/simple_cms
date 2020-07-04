<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['content_title','content_type','content_image','content_body','section','status','content_video'];
}
