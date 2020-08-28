<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Conner\Tagging\Taggable;

class Publication extends Model

{
    use Taggable;

protected $fillable = [
    'title', 'body'
];
}