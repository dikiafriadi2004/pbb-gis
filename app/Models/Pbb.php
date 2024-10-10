<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pbb extends Model
{
    use HasFactory;


    protected $guarded = [];


    public function getKecamatan()
    {
        return $this->belongsToMany(Kecamatan::class);
    }

    public function getImage()
    {
        return $this->hasMany(ImagePbb::class);
    }

    public function getImageLocation()
    {
        if(substr($this->image,0,5) == "https"){
            return $this->image;
        }

        if($this->image){
            return asset('uploads/location/'.$this->image);
        }

        return 'https://via.placeholder.com/300x300.png?text=No+Image';
    }
}
