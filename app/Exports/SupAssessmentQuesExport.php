<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\VWSupAssessmentQues;

class SupAssessmentQuesExport implements FromCollection, WithHeadings
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
            'name',
            'comment1',
            'comment2',
            'comment3',
            'comment4',
            'comment5',
            'comment6',
            'comment7',
            'comment8',
            'comment9',
            'comment10',
            'comment11',
            'comment12',
            'comment13',
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
            return VWSupAssessmentQues::all();
        }
        elseif($this->destination == 'Area'){
            return VWSupAssessmentQues::where('area', 'ILIKE', $this->area)->get();
        }
        elseif($this->destination == 'District'){
            return VWSupAssessmentQues::where('area', 'ILIKE', $this->area)->where('district', 'ILIKE', $this->dist)->get();
        }
        elseif($this->destination == 'Local'){
            return VWSupAssessmentQues::where('area', 'ILIKE', $this->area)->where('district', 'ILIKE', $this->dist)->where('local', 'ILIKE', $this->loc)->get();
        }
        
    }
}
