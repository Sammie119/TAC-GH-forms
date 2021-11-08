<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\VWMonitorReport;

class MonitorReportExport implements FromCollection, WithHeadings
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
            'question1',
            'comment1',
            'question2',
            'comment2',
            'comment3',
            'comment4',
            'question5',
            'comment5',
            'question6',
            'comment6',
            'question7a',
            'question7b',
            'question7c',
            'question7d',
            'question7e',
            'question8a',
            'comment8b',
            'comment9',
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
            'tithes_paid',
            'oferring',
            'total_tithe_off',
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
            return VWMonitorReport::all();
        }
        elseif($this->destination == 'Area'){
            return VWMonitorReport::where('area', $this->destination_name)->get();
        }
        elseif($this->destination == 'District'){
            return VWMonitorReport::where('district', $this->destination_name)->get();
        }
        elseif($this->destination == 'Local'){
            return VWMonitorReport::where('local', $this->destination_name)->get();
        }
        
    }
}
