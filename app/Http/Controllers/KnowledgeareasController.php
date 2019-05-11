<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as Request;

class KnowledgeareasController extends Controller
{

    public function importCSV(Request $req){
        //abrir oarquivo
        
        return $req;
    }

    private function csv_to_array($filename='', $delimiter=','){

        if(!file_exists($filename) || !is_readable($filename))
            return FALSE;

        $header = NULL;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== FALSE)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
            {
                if(!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;
    }
}
