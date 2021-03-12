<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $tabla='Tags';
    protected $fillable=['name'];
    //Relaciones
    public function posttags()
    {
        return $this->hasMany(Posttags::class);
    }
    use HasFactory;
}
