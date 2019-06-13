<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class documentoMaestroModel extends Model
{
    protected $table = 'DOCUMENTO_MAESTRO';
    protected $primaryKey = 'IN_ID_DOC_MAESTRO';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'IN_ID_PROYECTO','CH_ID_USUARIO_CREACION','DT_FECHA_CREACION',
        'CH_ID_USUARIO_UPDATE','DT_FECHA_UPDATE'
    ];

    public function proyecto() {
        return $this->hasOne('App\Models\proyectoModel','IN_ID_PROYECTO','IN_ID_PROYECTO');
    }
    public function documentoPlano () {
        return $this->hasMany('App\Models\documentoPlanoModel');
    }
    public function camposDocumentoMaestro () {
        return $this->hasMany('App\Models\camposDocumentoMaestroModel');
    }
}
