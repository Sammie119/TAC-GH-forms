<?php

namespace App\Exports;

use App\Models\VWFinancialAssessment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FinancialAssessmentExport implements FromCollection, WithHeadings
{
    public function __construct($distination, $area, $dist, $loc)
    {
        $this->destination = $distination;
        $this->area = $area;
        $this->dist = $dist;
        $this->loc = $loc;
    }

    public function headings():array{
        return [
            'district',
            'area',
            'local',
            'status',
            'month',
            'year',
            'tithe1',
            'offering1',
            'others1',
            'total1',
            'tithe2',
            'offering2',
            'others2',
            'total2',
            'tithe3',
            'offering3',
            'others3',
            'total3',
            'tithe4',
            'offering4',
            'others4',
            'total4',
            'tithe5',
            'offering5',
            'others5',
            'total5',
            'gdtotal',
            'officer',
            'date'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        if($this->destination == 'General'){
            return VWFinancialAssessment::all();
        }
        elseif($this->destination == 'Area'){
            return VWFinancialAssessment::where('area', 'ILIKE', $this->area)->get();
        }
        elseif($this->destination == 'District'){
            return VWFinancialAssessment::where('area', 'ILIKE', $this->area)->where('district', 'ILIKE', $this->dist)->get();
        }
        elseif($this->destination == 'Local'){
            return VWFinancialAssessment::where('area', 'ILIKE', $this->area)->where('district', 'ILIKE', $this->dist)->where('local', 'ILIKE', $this->loc)->get();
        }
        
    }
}
