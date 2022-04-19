<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postre extends Model
{
    use HasFactory;
    protected $table="postre";

    #llave primaria
    protected $primaryKey="id_postre";
    public $timestamps = false;

    public function detalle(){
      return $this->hasMany(Detalle::class,"id_postre","id_postre");
    }
}
