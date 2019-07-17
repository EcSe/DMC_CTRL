<?php

namespace App\Exports;

use App\Models\camposDocumentoPlanoModel;
use App\Models\documentoPlanoModel;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class exportTextoDocumento implements FromQuery, WithTitle,ShouldAutoSize
{
    private $idDocPlano;

    public function __construct(int $idDocPlano)
    {
        $this->idDocPlano = $idDocPlano;
    }

    public function query()
    {
        $documentPlano = documentoPlanoModel::where('IN_ID_DOC_PLANO', $this->idDocPlano)->first();

        $camposDocumentoPlano = camposDocumentoPlanoModel::query()->select('VC_VALOR_CADENA_4', 'VC_VALOR_CADENA_1')
            ->where([
                ['IN_ID_DOC_PLANO', $this->idDocPlano],
                ['VC_VALOR_CADENA_3', null],
            ]);

        return $camposDocumentoPlano;
    }

    public function title(): string
    {
        return 'Campos Texto';
    }
}
