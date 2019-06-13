<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class planoModel extends Model
{
    protected $table = 'PLANO';
    protected $primaryKey = 'IN_ID_PLANO';
    public $timestamps = false;
    public $autoincrementing = false;

    protected $fillable = [
        'VC_NOMBRE','VC_DESCRIPCION','DT_FECHA_FIN','CH_ID_USUARIO_CREACION',
        'DT_FECHA_CREACION','CH_ID_USUARIO_UPDATE','DT_FECHA_UPDATE','IN_ID_PROYECTO'
    ];

    public function proyecto(){
        return $this->belongsTo('App\Models\proyectoModel','IN_ID_PROYECTO');
    }
      
}
