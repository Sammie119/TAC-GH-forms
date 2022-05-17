<?php

namespace App\Http\Controllers;

use App\Models\Dropdown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DropdownController extends Controller
{
    public function viewChurches()
    {
        $church = Dropdown::orderBy('dropdown_name')->get();
        return view('view_churches', ['churches' => $church]);
    }

    public function addChurch()
    {
        return view('add_church');
    }

    public function addChurchStore(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'category' => 'required',
        ]);
 
        if($request->has('id')){
            $church = Dropdown::find($request->id);
        }
        else{
            $church = new Dropdown;
        }

        $church->dropdown_name = $request['name'];
        $church->status = $request['category']; 
        
        if($request->has('id')){
            $church->update();

            Cache::forget('churches');

            Cache::forever('churches', Dropdown::orderBy('dropdown_name')->get());

            return redirect('churches')->with('success', 'Church Updated Successfully!!');
        }
        else{
            $church->save();

            Cache::forget('churches');
            
            Cache::forever('churches', Dropdown::orderBy('dropdown_name')->get());

            return redirect('churches')->with('success', 'New Church Successfully Created!!');
        }
        
    }

    public function editChurch($id)
    {
        $church = Dropdown::find($id);
        return view('add_church', ['church' => $church]);
    }

    public function deleteChurch($id)
    {
        $church = Dropdown::find($id);
        $church->delete();
        return back()->with('success', 'Church Deleted Successfully!!');
    }

    static function cacheLoader()
    {
        Cache::forever('churches', Dropdown::orderBy('dropdown_name')->get());
        
        return;
    }
}
