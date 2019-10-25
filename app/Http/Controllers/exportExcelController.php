<?php

namespace App\Http\Controllers;

use App\Models\camposDocumentoPlanoModel;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class exportExcelController extends Controller
{
    public function leerExcel($idDocPlano)
    {

        $camposDocumentoPlano = camposDocumentoPlanoModel::where('IN_ID_DOC_PLANO', $idDocPlano)->get();
        $inputFileName = base_path('public/templates/OBRA_CIVIL.xlsx');
        $spreadsheet = IOFactory::load($inputFileName);

        /*PESTAÑA POSTE */
        $worksheet = $spreadsheet->getSheet(0);
        $direccion = $camposDocumentoPlano[0]->VC_VALOR_CADENA_1;
        $plano = $camposDocumentoPlano[1]->VC_VALOR_CADENA_1;
        $codigo = $camposDocumentoPlano[2]->VC_VALOR_CADENA_1;
        $distrito = $camposDocumentoPlano[3]->VC_VALOR_CADENA_1;

        $worksheet->getCell('C5')->setValue($direccion);
        $worksheet->getCell('C6')->setValue($plano);
        $worksheet->getCell('C7')->setValue($codigo);
        $worksheet->getCell('C8')->setValue($distrito);

        $drawing = new Drawing();
        $drawing->setPath(base_path('public/storage/Imagenes/'.$camposDocumentoPlano[50]->VC_VALOR_CADENA_1));
        $drawing->setCoordinates('A14');
        $drawing->setResizeProportional(false);
        $drawing->setWidthAndHeight(655,995);
        $drawing->setWorksheet($worksheet);

        $drawing1 = new Drawing();
        $drawing1->setPath(base_path('public/storage/Imagenes/'.$camposDocumentoPlano[51]->VC_VALOR_CADENA_1));
        $drawing1->setCoordinates('H14');
        $drawing1->setResizeProportional(false);
        $drawing1->setWidthAndHeight(655,995);
        $drawing1->setWorksheet($worksheet);

        $drawing2 = new Drawing();
        $drawing2->setPath(base_path('public/storage/Imagenes/'.$camposDocumentoPlano[52]->VC_VALOR_CADENA_1));
        $drawing2->setCoordinates('A46');
        $drawing2->setResizeProportional(false);
        $drawing2->setWidthAndHeight(655,995);
        $drawing2->setWorksheet($worksheet);

        /*PESTAÑA CLOSURE 96 */
        /*PESTAÑA FDT */
        /*PESTAÑA CLOSURE12-24 */
        /*PESTAÑA FAT */
        /*PESTAÑA INVENTARIO */

        $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
        $writer->save('php://output');

    }
}
