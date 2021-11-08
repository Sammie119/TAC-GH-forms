<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\VWAreaSupQuestions;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AreaSupQuestionsExport implements FromCollection, WithHeadings
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
            'date_of_report',
            'wife_at_station',
            'number_of_children',
            'last_child_age',
            'comment1',
            'comment2',
            'comment3',
            'comment4',
            'comment5',
            'comment6',
            'comment7',
            'comment8',
            'comment9',
            'name_sup',
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
            return VWAreaSupQuestions::all();
        }
    }
}
