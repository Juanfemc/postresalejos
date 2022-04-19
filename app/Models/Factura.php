<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table="factura";
        #llave primaria
    protected $primaryKey="id_factura";
    public $timestamps = false;

    public function cliente(){
        return $this->belongsTo(Clinte::class,"id_cliente","id_cliente");
    }
    
    public function detalle(){
        return $this->belongsTo(Detalle::class,"id_detalle","id_detalle");
    }
    
}
