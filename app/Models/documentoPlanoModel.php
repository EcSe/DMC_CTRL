<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class documentoPlanoModel extends Model
{
    protected $table = 'DOCUMENTO_PLANO';
    protected $primaryKey = 'IN_ID_DOC_PLANO';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'IN_ID_DOC_MAESTRO','IN_ID_PLANO','CH_ID_USUARIO_CREACION',
        'DT_FECHA_CREACION','CH_ID_USUARIO_UPDATE','DT_FECHA_UPDATE'
    ];

    public function plano () {
        return $this->hasOne('App\Models\planoModel');
    }
    public function documentoMaestro () {
        return $this->belongsTo('App\Models\documentoMaestroModel','IN_ID_DOC_MAESTRO');
    }
}
