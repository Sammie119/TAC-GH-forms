<?php

namespace App\Exports;

use App\Models\VWFinancialPolicy;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FinancialPolicyExport implements FromCollection, WithHeadings
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
            'local',
            'moniter',
            'question1a',
            'comment1a',
            'question1b',
            'comment1b',
            'question1c',
            'comment1c',
            'question1d',
            'comment1d',
            'question1e',
            'comment1e',
            'question1f',
            'comment1f',
            'question1g',
            'comment1g',
            'question2a',
            'comment2a',
            'question2b',
            'comment2b',
            'question2c',
            'comment2c',
            'question3a',
            'comment3a',
            'question3b',
            'comment3b',
            'question3c',
            'comment3c',
            'question3d',
            'comment3d',
            'question3e',
            'comment3e',
            'question3f',
            'comment3f',
            'question3g',
            'comment3g',
            'question3h',
            'comment3h',
            'question3i',
            'comment3i',
            'question4a',
            'comment4a',
            'comment4b',
            'comment4c1',
            'comment4c2',
            'comment4c3',
            'comment4d',
            'comment4e',
            'comment4f',
            'comment5a',
            'comment5b1',
            'comment5b2',
            'comment5b3',
            'comment5b4',
            'comment5c',
            'question6a',
            'comment6a',
            'comment6b',
            'question6c1',
            'comment6c1',
            'question6c2',
            'comment6c2',
            'comment6c3',
            'question6d',
            'comment6d',
            'question6e',
            'comment6e',
            'question7a1',
            'comment7a1',
            'question7a2',
            'comment7a2',
            'question7b1',
            'comment7b1',
            'question7b2',
            'comment7b2',
            'question7b3',
            'comment7b3',
            'question7c',
            'comment7c',
            'question7d',
            'comment7d',
            'comment8a',
            'comment8b',
            'question8c',
            'comment8c',
            'question8d',
            'comment8d',
            'comment8e',
            'comment8f',
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
            return VWFinancialPolicy::all();
        }
        elseif($this->destination == 'Area'){
            return VWFinancialPolicy::where('area', $this->area)->get();
        }
        elseif($this->destination == 'District'){
            return VWFinancialPolicy::where('area', $this->area)->where('district', $this->dist)->get();
        }
        elseif($this->destination == 'Local'){
            return VWFinancialPolicy::where('area', $this->area)->where('district', $this->dist)->where('local', $this->loc)->get();
        }
    }
}
