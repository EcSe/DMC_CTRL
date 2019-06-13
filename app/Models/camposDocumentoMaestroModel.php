<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class camposDocumentoMaestroModel extends Model
{
    protected $table = 'CAMPOS_DOCUMENTO_MAESTRO';
    protected $primaryKey = 'IN_ID_CAMPO';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'IN_ID_DOC_MAESTRO','VC_VALOR_CADENA_1','VC_VALOR_CADENA_2','VC_VALOR_CADENA_3',
        'VC_VALOR_CADENA_4','NU_VALOR_NUMERICO_1','NU_VALOR_NUMERICO_2','IN_VALOR_ENTERO_1',
        'IN_VALOR_ENTERO_2','BL_VALOR_BOOLEANO_1','BL_VALOR_BOOLEANO_2','CH_ID_USUARIO_CREACION',
        'DT_FECHA_CREACION','CH_ID_USUARIO_UPDATE','DT_FECHA_UPDATE'
    ];

    public function documentoMaestro () {
        return $this->belongsTo('App\Models\documentoMaestroModel','IN_ID_DOC_MAESTRO');
    }
}
