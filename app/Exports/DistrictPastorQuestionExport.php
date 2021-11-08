<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\VWDistrictPastorQuestion;

class DistrictPastorQuestionExport implements FromCollection, WithHeadings
{
    public function __construct($distination)
    {
        $this->destination = $distination;
    }

    public function headings():array{
        return [
            'name',
            'date_of_birth',
            'age',
            'year_of_call',
            'stay_length_at_station',
            'wife_at_station',
            'number_of_children',
            'last_child_age',
            'number_of_children_at_station',
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
            'comment14',
            'name_dist',
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
            return VWDistrictPastorQuestion::all();
        }
        
    }
}
