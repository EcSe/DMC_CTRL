<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class docPlanoUsuarioDetalleModel extends Model
{
    protected $table = 'DOCPLANO_USUARIO_DETALLE';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'CH_ID_USUARIO','IN_ID_DOC_PLANO','CH_ID_USUARIO_CREACION',
        'DT_FECHA_CREACION','CH_ID_USUARIO_UPDATE','DT_FECHA_UPDATE'
    ];

    public function documentoPlano () {
        return $this->belongsTo('App\Models\documentoPlanoModel','IN_ID_DOC_PLANO','IN_ID_DOC_PLANO');
    }
    
    public function usuarios () {
        return $this->belongsTo('App\Models\usuarioModel','CH_ID_USUARIO','CH_ID_USUARIO');
    }
}
