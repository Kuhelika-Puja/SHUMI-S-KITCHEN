<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\CsvData;
use App\csvImportData;
class CsvImportController extends Controller
{
    public function index(){
    	return view('backend.csv-import.index');
    }


    public function parseImport(Request $request)
    {

        $path = $request->file('csv_file')->getRealPath();

        if ($request->has('header')) {
            $data = Excel::load($path, function($reader) {})->get()->toArray();
           
        } else {
            $data = array_map('str_getcsv', file($path));
          
        }

        if (count($data) > 0) {
            if ($request->has('header')) {
                $csv_header_fields = [];
                foreach ($data[0] as $key => $value) {
                    $csv_header_fields[] = $key;
                   
                }
            }
            $csv_data = array_slice($data, 0, 100);

            $csv_data_file = CsvData::create([
                'csv_filename' => $request->file('csv_file')->getClientOriginalName(),
                'csv_header' => $request->has('header'),
                'csv_data' => json_encode($data)
            ]);
        } else {
            return redirect()->back();
        }

        return view('backend.csv-import.import_fields', compact( 'csv_header_fields', 'csv_data', 'csv_data_file'));

    }

    public function processImport(Request $request)
    {
        $data = CsvData::find($request->csv_data_file_id);
        print_r($data);
        $csv_data = json_decode($data->csv_data, true);
       
        if (is_array($csv_data) || is_object($csv_data))
{
        foreach ($csv_data as $row) {
            $contact = new csvImportData();
            foreach (config('app.db_fields') as $index => $field) {
                if ($data->csv_header) {
                    $contact->$field = $row[$request->fields[$field]];
                } else {
                    $contact->$field = $row[$request->fields[$index]];
                }
            }
            $contact->save();
        }
    }

        return redirect('admin/csv');
    }

    public function showImportData(){
        $data = [];
        $data['count_bestellnummer'] = csvImportData::groupBy('bestellnummer')->count();
        $data['import_data'] = csvImportData::groupBy('bestellnummer')->get();
        return view('backend.csv-import.showdata',$data);
    }
}
