<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\VWLocalLevelQuestion;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LocalLevelQuestionExport implements FromCollection, WithHeadings
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
            'question22',
            'comment22',
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
            return VWLocalLevelQuestion::all();
        }
        elseif($this->destination == 'Area'){
            return VWLocalLevelQuestion::where('area', $this->destination_name)->get();
        }
        elseif($this->destination == 'District'){
            return VWLocalLevelQuestion::where('district', $this->destination_name)->get();
        }
        elseif($this->destination == 'Local'){
            return VWLocalLevelQuestion::where('local', $this->destination_name)->get();
        }
        
    }
}
