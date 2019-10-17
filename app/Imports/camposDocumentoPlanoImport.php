<?php

namespace App\Imports;

use App\Models\camposDocumentoPlanoModel;
use Illuminate\Support\Collection;
//use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel; /*Para usar un modelo en la importacin*/
use Maatwebsite\Excel\Concerns\WithMultipleSheets; /*Para usar las diferentes hojas independientemente*/
use Maatwebsite\Excel\Concerns\SkipsUnknownSheets; /*Para mandar un mensaje por si no encuentra un 
                                                    sheet determinado */

class camposDocumentoPlanoImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        Excel::import(new camposDocumentoPlanoModel, storage_path(base_path('public/templates/OBRA_CIVIL.xlsx')));

    }

    public function sheets(): array
    {
        return [
           0 => new Kantutec/PosteImport(),
           1 => new Kantutec/Closure96Import(),
           2 => new Kantutec/FDTImport(),
           3 => new Kantutec/Closure12_24Import(),
           4 => new Kantutec/FATImport(),
           5 => new Kantutec/InventarioImport()
        ];
    }

    public function onUnknownSheet($sheetName)
    {
        info("El {$sheetName} no se encuentra en el archivo");
    }
}
