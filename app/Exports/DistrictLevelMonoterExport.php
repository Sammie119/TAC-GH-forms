<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\VWDistrictLevelMonoter;

class DistrictLevelMonoterExport implements FromCollection, WithHeadings
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
            return VWDistrictLevelMonoter::all();
        }
        elseif($this->destination == 'Area'){
            return VWDistrictLevelMonoter::where('area', $this->destination_name)->get();
        }
        elseif($this->destination == 'District'){
            return VWDistrictLevelMonoter::where('district', $this->destination_name)->get();
        }
        elseif($this->destination == 'Local'){
            return VWDistrictLevelMonoter::where('local', $this->destination_name)->get();
        }
        
    }
}
