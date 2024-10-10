<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = array('pivot');

    public function getPbb()
    {
        return $this->belongsToMany(Pbb::class);
    }
}
