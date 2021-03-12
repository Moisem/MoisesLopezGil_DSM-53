<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posttags extends Model
{
    protected $tabla='posttags';
    //Relaciones
    public function posts()
    {
        return $this->belongsTo(Posts::class);
    }
    public function tags()
    {
        return $this->belongsTo(Tags::class);
    }
    use HasFactory;
}
