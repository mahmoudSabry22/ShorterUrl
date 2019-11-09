<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = [
    	'url','short','user_id', 'views'
    ];

    public function getShortLinkAttribute()
    {
        
        $url = $this->url;
        $url = str_replace('http://', '', str_replace('https://', '', $url));
        $url = 'http://' . $url;
        return $url;
    }
}
