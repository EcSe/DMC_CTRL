<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuarioModel extends Model
{
    protected $table = 'USUARIO';
    protected $primaryKey = 'CH_ID_USUARIO';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'VC_NOMBRE','VC_APELLIDOS','IN_ID_PERFIL',
        'VC_PASSWORD','VC_EMAIL'
    ];
    protected $hidden = ['VC_PASSWORD'];
    
    public function Perfil()
    {
        return $this->belongsTo('App\Models\perfilModel','IN_ID_PERFIL');
    }
}
