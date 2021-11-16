<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\VWDistrictPastorReport;

class DistrictPastorReportExport implements FromCollection, WithHeadings
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
            'comment1',
            'comment2',
            'comment3',
            'comment4',
            'comment5',
            'question6a',
            'question6b',
            'question6c',
            'question6d',
            'question6e',
            'question7',
            'question8',
            'question9',
            'comment9',
            'comment10',
            'comment11',
            'comment12',
            'comment13',
            'comment14',
            'comment15',
            'comment16',
            'pastors',
            'elders',
            'deacons',
            'deaconesses',
            'adult_males',
            'adult_females',
            'children',
            'youth',
            'total_att',
            'tithe_payers',
            'active_tithe_payers',
            'officers_tithe_payers',
            'tithes_paid',
            'oferring',
            'any_oferring',
            'total_tithe_off',
            'pastor',
            'p_elder',
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
            return VWDistrictPastorReport::all();
        }
        elseif($this->destination == 'Area'){
            return VWDistrictPastorReport::where('area', $this->area)->get();
        }
        elseif($this->destination == 'District'){
            return VWDistrictPastorReport::where('area', $this->area)->where('district', $this->dist)->get();
        }
        elseif($this->destination == 'Local'){
            return VWDistrictPastorReport::where('area', $this->area)->where('district', $this->dist)->where('local', $this->loc)->get();
        }
        
    }
}
