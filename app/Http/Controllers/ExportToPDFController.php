<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Charts\AreaHeadChartsController;
use Barryvdh\DomPDF\PDF AS PDF;


class ExportToPDFController extends Controller
{
    public function areaHeadPDF($destination, $area, $dist, $loc)
    {
        $query = AreaHeadChartsController::areaHead($destination, $area, $dist, $loc);
        $form = 'Charts';
        $pdf = PDF::loadView('charts.chart-area-head', compact('query', 'form'));
        return $pdf->stream();;
    }
}
