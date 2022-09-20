<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable=['unit_name','amount'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
