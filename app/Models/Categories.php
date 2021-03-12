<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $tabla='categories';
    protected $fillable=['name','descripcion','image'];
    //Relaciones
    public function posts()
    {
        return $this->hasMany(Posts::class);
    }
    use HasFactory;
}
