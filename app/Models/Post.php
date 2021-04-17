<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /*Crear propiedad fillable par decirle a laravel que campos 
    quiero guardar utilizando la asignación masiva */
    protected $fillable = [
        'title',
        'body'
    ]; //esto me servirá para indicar que campos quiero permitir

}
