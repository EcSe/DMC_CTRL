<?php

namespace App\Imports\Kantutec;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
/*Entradas para exportar Documentos en hoja Poste*/
use App\Models\camposDocumentoPlanoModel;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class PosteImport implements FromQuery, WithTitle,WithMapping
{
    use Exportable;
    private $idDocPlano;
        
    public function __construct(int $idDocPlano) 
    {
        $this->idDocPlano = $idDocPlano;
    }

    public function query() 
    {
        $camposDocumentoPlano = camposDocumentoPlanoModel::query()->select('VC_VALOR_CADENA_2','VC_VALOR_CADENA_1')
                                ->where([
                                    ['IN_ID_DOC_PLANO',$this->idDocPlano]
                                ]);
        return $camposDocumentoPlano;
    }

    public function map($invoice): array
    {
        return [
            $invoice->invoice_number,
            $invoice->user->name,
            Date::dateTimeToExcel($invoice->created_at),
        ];
    }
}
