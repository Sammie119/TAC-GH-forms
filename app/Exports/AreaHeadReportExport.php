<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\VWAreaheadReport;

class AreaHeadReportExport implements FromCollection, WithHeadings
{
    public function __construct($distination, $destination_name)
    {
        $this->destination = $distination;
        $this->destination_name = $destination_name;
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
            'comment6',
            'question7a',
            'question7b',
            'question7c',
            'question7d',
            'question7e',
            'question8',
            'question9',
            'question10',
            'comment10',
            'question11',
            'comment11',
            'comment12',
            'question13',
            'comment13',
            'comment14',
            'comment15',
            'comment16',
            'comment17',
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
            'tithes_paid',
            'oferring',
            'any_oferring',
            'total_tithe_off',
            'apostle',
            'pastor',
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
            return VWAreaheadReport::all();
        }
        elseif($this->destination == 'Area'){
            return VWAreaheadReport::where('area', $this->destination_name)->get();
        }
        elseif($this->destination == 'District'){
            return VWAreaheadReport::where('district', $this->destination_name)->get();
        }
        elseif($this->destination == 'Local'){
            return VWAreaheadReport::where('local', $this->destination_name)->get();
        }
        
    }
}
