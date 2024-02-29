<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey='cate_id';
    protected $fillable=['cate_id','cate_nombre','cate_descripcion'];
    public $timestamps=false;
    use HasFactory;
}
