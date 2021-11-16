<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\VWMemberReport;

class MemberReportExport implements FromCollection, WithHeadings
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
            'question1',
            'comment1',
            'question2',
            'comment2',
            'question3',
            'comment3',
            'question4',
            'comment4',
            'question5',
            'comment5',
            'question6',
            'comment6',
            'question7',
            'comment7',
            'question8',
            'comment8',
            'question9',
            'comment9',
            'question10',
            'comment10',
            'question11',
            'comment11',
            'question12',
            'comment12',
            'question13',
            'comment13',
            'question14',
            'comment14',
            'question15',
            'comment15',
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
            return VWMemberReport::all();
        }
        elseif($this->destination == 'Area'){
            return VWMemberReport::where('area', $this->area)->get();
        }
        elseif($this->destination == 'District'){
            return VWMemberReport::where('area', $this->area)->where('district', $this->dist)->get();
        }
        elseif($this->destination == 'Local'){
            return VWMemberReport::where('area', $this->area)->where('district', $this->dist)->where('local', $this->loc)->get();
        }
        
    }
}
