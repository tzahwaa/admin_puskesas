<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BalitaExport;

class ExportController extends Controller
{
    public function exportToExcel()
    {
        return Excel::download(new BalitaExport, 'balita.xlsx');
    }
}
