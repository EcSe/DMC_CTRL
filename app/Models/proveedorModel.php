<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proveedorModel extends Model
{
    protected $table = 'PROVEEDOR';
    protected $primaryKey = 'IN_ID_PROVEEDOR';
    public $timestamps = false;
    protected $fillable = [
        'VC_NOMBRE','VC_DESCRIPCION','VC_EMAIL','CH_ID_USUARIO_CREACION',
        'DT_FECHA_CREACION','CH_ID_USUARIO_UPDATE','DT_FECHA_UPDATE'
    ];

    public function onProyecto(){
        return $this->hasMany('App\Models\proyectoModel');
    }
}
