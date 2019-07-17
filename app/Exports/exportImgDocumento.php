<?php

namespace App\Exports;

use App\Models\camposDocumentoPlanoModel;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class exportImgDocumento implements WithDrawings,WithTitle,ShouldAutoSize
{
    private $idDocPlano;

    public function __construct(int $idDocPlano)
    {
        $this->idDocPlano = $idDocPlano;
    }

    public function drawings()
    {
        $camposDocumentoPlano = camposDocumentoPlanoModel::where([
            ['IN_ID_DOC_PLANO',$this->idDocPlano],
            ['VC_VALOR_CADENA_3','IMG']
        ])->get();
        $imagenes = [];
        $i= 2;
        foreach ($camposDocumentoPlano as  $value) {
            $drawing = new Drawing();
            $drawing->setName($value->VC_VALOR_CADENA_4);
            $drawing->setDescription($value->VC_VALOR_CADENA_4);
            $drawing->setPath(public_path('storage/Imagenes/'.$value->VC_VALOR_CADENA_1));
            $drawing->setHeight(600);
            $drawing->setCoordinates('B'.$i);
            $i += 36;
            $imagenes[] = $drawing;
        }
        return $imagenes;

    }

    public function  title():string {
        return 'Campos Imagen';
    }
}
