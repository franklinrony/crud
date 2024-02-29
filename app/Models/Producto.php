<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey='prod_id';
    protected $fillable=['prod_id','prod_nombre','prod_cantidad','prod_precio','cate_id'];
    public $timestamps=false;
    use HasFactory;

    public function categoria(){
        return $this->hasOne(Categoria::class,'cate_id','cate_id');
    }
}
