<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  use HasFactory;
  protected $fillable = [
    'producto',
    'precio',
    'descuento',
    'stock',
    'imagen',
    'destacar',
    'recomendar',
    'atributes',
    'visible',
    'status',
    'extract',
    'description',
    'costo_x_art',
    'peso',
    'categoria_id'
  ];


  public function categoria()
  {
      return $this->belongsTo(Category::class);
  }

  public function galeria(){
    return $this->hasMany(Galerie::class, 'product_id');
  }
}
