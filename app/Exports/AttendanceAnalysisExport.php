<?php

namespace App\Exports;

use App\Models\VWAttendanceAnalysis;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AttendanceAnalysisExport implements FromCollection, WithHeadings
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
            'attn_month',
            'attn_year',
            'pastors1',
            'pastors2',
            'pastors3',
            'pastors4',
            'pastors5',
            'pastors_total',
            'elders1',
            'elders2',
            'elders3',
            'elders4',
            'elders5',
            'elders_total',
            'deacons1',
            'deacons2',
            'deacons3',
            'deacons4',
            'deacons5',
            'deacons_total',
            'deaconesses1',
            'deaconesses2',
            'deaconesses3',
            'deaconesses4',
            'deaconesses5',
            'deaconesses_total',
            'adult_males1',
            'adult_males2',
            'adult_males3',
            'adult_males4',
            'adult_males5',
            'adult_males_total',
            'adult_females1',
            'adult_females2',
            'adult_females3',
            'adult_females4',
            'adult_females5',
            'adult_females_total',
            'children1',
            'children2',
            'children3',
            'children4',
            'children5',
            'children_total',
            'youth1',
            'youth2',
            'youth3',
            'youth4',
            'youth5',
            'youth_total',
            'total_att',
            'average_att',
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
            return VWAttendanceAnalysis::all();
        }
        elseif($this->destination == 'Area'){
            return VWAttendanceAnalysis::where('area', 'ILIKE', $this->area)->get();
        }
        elseif($this->destination == 'District'){
            return VWAttendanceAnalysis::where('area', 'ILIKE', $this->area)->where('district', 'ILIKE', $this->dist)->get();
        }
        elseif($this->destination == 'Local'){
            return VWAttendanceAnalysis::where('area', 'ILIKE', $this->area)->where('district', 'ILIKE', $this->dist)->where('local', 'ILIKE', $this->loc)->get();
        }
        
    }
}
