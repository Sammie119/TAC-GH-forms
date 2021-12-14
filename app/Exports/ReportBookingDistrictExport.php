<?php

namespace App\Exports;

use App\Models\VWReportBookingDistrict;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportBookingDistrictExport implements FromCollection, WithHeadings
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
            'prepared_by',
            'year',
            'period',
            'w_p',
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
            'question16',
            'comment16',
            'question17',
            'comment17',
            'question18',
            'comment18',
            'question19',
            'comment19',
            'question20',
            'comment20',
            'question21',
            'comment21',
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
            return VWReportBookingDistrict::all();
        }
        elseif($this->destination == 'Area'){
            return VWReportBookingDistrict::where('area', 'ILIKE', $this->area)->get();
        }
        else{
            return VWReportBookingDistrict::where('area', 'ILIKE', $this->area)->where('district', 'ILIKE', $this->dist)->get();
        }
        // elseif($this->destination == 'District'){
        //     return VWReportBookingDistrict::where('area', $this->area)->where('district', $this->dist)->get();
        // }
        // elseif($this->destination == 'Local'){
        //     return VWReportBookingDistrict::where('area', $this->area)->where('district', $this->dist)->where('local', $this->loc)->get();
        // }
    }
}
