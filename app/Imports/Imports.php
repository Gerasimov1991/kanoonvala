<?php

namespace App\Imports;


use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Http\Requests\Backend\product\StoreProductRequest;
use DB;
class Imports implements  ToModel,WithHeadingRow
{
    protected $fileSection;
    public function __construct($fileType)
    {
        $this->fileSection = $fileType;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {   $row = array_filter($row);
        
        // dd(strtolower($row['city']));
        $city = DB::table('cities')->whereRaw('LOWER(city) LIKE "%'.strtolower($row['city']).'%"')->first();
        if($city){
            // dd($city);
            $insertArray = [
                'name' => $row['court_name'],
                'city_id'   => $city->id
            ];
            $isInserted = DB::table('court_lists')->insert($insertArray);
        }else{
            echo '<pre>';
                print_r($row);
                echo '</pre>';
        }
         
    } 
}
