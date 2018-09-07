<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillables = array('*');
    protected $guarded = array();
    
    public function catalogs()
    {
        return $this->hasOne('App\catalogs','id','catalog_id');
    }

}
