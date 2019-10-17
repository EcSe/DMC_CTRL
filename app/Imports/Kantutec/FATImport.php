<?php

namespace App\Imports\Kantutec;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class FATImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }
}
