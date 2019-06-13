<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proyectoModel extends Model
{
    protected $table = 'PROYECTO';
    protected $primaryKey = 'IN_ID_PROYECTO';
    public $timestamps = false;
    protected $fillable = [
        'VC_NOMBRE','VC_DESCRIPCION','CH_ID_USUARIO_CREACION',
        'DT_FECHA_CREACION','CH_ID_USUARIO_UPDATE','DT_FECHA_UPDATE',
        'IN_ID_PROVEEDOR'
    ];

    public function proveedor () {
        return $this->belongsTo('App\Models\proveedorModel','IN_ID_PROVEEDOR');
    }
    
    // public function documentoMaestro () {
    //     return $this->hasOne('App\Models\documentoMaestroModel');
    // }
}
