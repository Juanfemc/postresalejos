<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table="cliente";

    #llave primaria
    protected $primaryKey="id_cliente";
    public $timestamps = false;

    public function factura(){
      return $this->hasMany(Factura::class,"id_cliente","id_cliente");
    }
}
