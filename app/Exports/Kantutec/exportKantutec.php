<?php

namespace App\Exports\Kantutec;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class exportKantutec implements WithMultipleSheets
{
    use Exportable;
    protected $idDocPlano;

    public function __construct(int $idDocPlano)
    {
        $this->idDocPlano = $idDocPlano;
    }

    public function sheets(): array
    {
        $sheets = [];
        $sheets [] = new App\Imports\Kantutec\PosteImport($this->idDocPlano);
        return $sheets;
    }
}
