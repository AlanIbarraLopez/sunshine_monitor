<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    public $timestamps = false;
    public $primaryKey = 'temp_id';
}
