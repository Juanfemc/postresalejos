<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    
    protected $table="detalle";
        #llave primaria
    protected $primaryKey="id_detalle";
    public $timestamps = false;

    public function postre(){
        return $this->belongsTo(Postre::class,"id_poste","id_postre");
    }
}
