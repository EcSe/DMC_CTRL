<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\Exportable;

class camposDocumentoPlanoExport implements WithMultipleSheets
{
    use Exportable;
    protected $idDocPlano;

    public function __construct(int $idDocPlano){
        $this->idDocPlano = $idDocPlano; 
    }

    public function sheets():array {
        $sheets = [];
        $sheets[] = new exportTextoDocumento($this->idDocPlano);
        $sheets[] = new exportImgDocumento($this->idDocPlano);
        return $sheets;
    }
}
