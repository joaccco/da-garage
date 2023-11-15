<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //relacion uno a muchos inversa
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //relacion muchos a muchos
    public function colors(){
        return $this->hasMany(Color::class);
    }

    //relaciion uno a mucho
    public function sizes(){
        return $this->hasMany(Size::class);
    }

    //relacion uno a muchos polimorfica
    public function images(){
        return $this->morphMany(Image::class, "imageable");
    }
}
