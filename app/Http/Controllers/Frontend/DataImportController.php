<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\Imports;
use Maatwebsite\Excel\Facades\Excel;


class DataImportController extends Controller
{
    public function importView()
    {
        $view = view('dataimport.view');
        return $view->render();
    }

    public function importSubmit(Request $request){
        $input = $request->except(['_token']);
        // dd(array_keys($input));

        if(isset($input['regular-file'])){
            $request->validate([
                'regular-file'         =>  'required|mimes:xlsx,xls|max:2048'
            ]);
    
            Excel::import(new Imports(array_keys($input)[0]),request()->file('regular-file'));
        }else{
            $request->validate([
                'site-file'         =>  'required|mimes:xlsx,xls|max:2048'
            ]);
    
            Excel::import(new Imports(array_keys($input)[0]),request()->file('site-file'));
        }
        
           exit;
        return back()->with('success', 'Excel imported successfully!');;
    }
}
