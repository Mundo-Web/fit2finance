<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
    use HasFactory;
    protected $filiable =  ['titulo',
    'imagen',
    'descripcion',
    'valores',
    'color',
    'status'];

    public function values()
    {
        return $this->hasMany(Attributes::class, 'attribute_id');
    }
}
