<?php

namespace App\Exports;

use App\Models\VWProcurementPolicy;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProcurementPolicyExport implements FromCollection, WithHeadings
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
            'area',
            'district',
            'local',
            'moniter',
            'comment1a',
            'question1b',
            'comment1b',
            'question1c',
            'comment1c',
            'question1d',
            'comment1d',
            'comment2a',
            'question2b',
            'comment2b',
            'question2c',
            'comment2c',
            'comment2d',
            'question3a',
            'comment3a',
            'comment3b',
            'question3c',
            'comment3c',
            'comment3d',
            'question4a',
            'comment4a',
            'comment4b',
            'question4c',
            'comment4c',
            'question5a',
            'comment5a',
            'question5b',
            'comment5b',
            'question5c',
            'comment5c',
            'comment5d',
            'question6a',
            'comment6a',
            'question6b',
            'comment6b',
            'question6c',
            'comment6c',
            'question7a',
            'comment7a',
            'comment7b',
            'comment7c',
            'comment7d',
            'question8a',
            'comment8a',
            'question8b',
            'comment8b',
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
            return VWProcurementPolicy::all();
        }
        elseif($this->destination == 'Area'){
            return VWProcurementPolicy::where('area', 'ILIKE', $this->area)->get();
        }
        elseif($this->destination == 'District'){
            return VWProcurementPolicy::where('area', 'ILIKE', $this->area)->where('district', 'ILIKE', $this->dist)->get();
        }
        elseif($this->destination == 'Local'){
            return VWProcurementPolicy::where('area', 'ILIKE', $this->area)->where('district', 'ILIKE', $this->dist)->where('local', 'ILIKE', $this->loc)->get();
        }
    }
}
