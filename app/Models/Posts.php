<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $tabla='posts';
    protected $fillable=['title','slug','descripcion','image','extract'];
    //Relaciones
    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function posttags()
    {
        return $this->hasMany(Posttags::class);
    }
    use HasFactory;
}
