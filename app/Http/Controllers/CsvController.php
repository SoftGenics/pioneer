<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use League\Csv\Writer;
use App\Models\User;
class CsvController extends Controller
{
    public function export()
{
    $headers = [
        'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
    ,   'Content-type'        => 'text/csv'
    ,   'Content-Disposition' => 'attachment; filename=galleries.csv'
    ,   'Expires'             => '0'
    ,   'Pragma'              => 'public'
];

$list = User::all()->toArray();

# add headers for each column in the CSV download
array_unshift($list, array_keys($list[0]));

$callback = function() use ($list) 
{
    $FH = fopen('php://output', 'w');
    foreach ($list as $row) { 
        fputcsv($FH, $row);
    }
    fclose($FH);
};

return response()->stream($callback, 200, $headers);
}
public function payment()
{
    $headers = [
        'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
    ,   'Content-type'        => 'text/csv'
    ,   'Content-Disposition' => 'attachment; filename=galleries.csv'
    ,   'Expires'             => '0'
    ,   'Pragma'              => 'public'
];

$list = User::all()->toArray();

# add headers for each column in the CSV download
array_unshift($list, array_keys($list[0]));

$callback = function() use ($list) 
{
    $FH = fopen('php://output', 'w');
    foreach ($list as $row) { 
        fputcsv($FH, $row);
    }
    fclose($FH);
};

return response()->stream($callback, 200, $headers);
}





public function exportteacher(){
    $headers = [
        'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
    ,   'Content-type'        => 'text/csv'
    ,   'Content-Disposition' => 'attachment; filename=galleries.csv'
    ,   'Expires'             => '0'
    ,   'Pragma'              => 'public'
];

$list = User::where("category","2")->get()->toArray();

# add headers for each column in the CSV download
array_unshift($list, array_keys($list[0]));

$callback = function() use ($list) 
{
    $FH = fopen('php://output', 'w');
    foreach ($list as $row) { 
        fputcsv($FH, $row);
    }
    fclose($FH);
};

return response()->stream($callback, 200, $headers);
    
}

public function exportstudent(){$headers = [
    'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
,   'Content-type'        => 'text/csv'
,   'Content-Disposition' => 'attachment; filename=galleries.csv'
,   'Expires'             => '0'
,   'Pragma'              => 'public'
];

$list = User::where("category","1")->get()->toArray();

# add headers for each column in the CSV download
array_unshift($list, array_keys($list[0]));

$callback = function() use ($list) 
{
$FH = fopen('php://output', 'w');
foreach ($list as $row) { 
    fputcsv($FH, $row);
}
fclose($FH);
};

return response()->stream($callback, 200, $headers);}
public function exportemployee(){$headers = [
    'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
,   'Content-type'        => 'text/csv'
,   'Content-Disposition' => 'attachment; filename=galleries.csv'
,   'Expires'             => '0'
,   'Pragma'              => 'public'
];

$list = User::where("category","3")->get()->toArray();

# add headers for each column in the CSV download
array_unshift($list, array_keys($list[0]));

$callback = function() use ($list) 
{
$FH = fopen('php://output', 'w');
foreach ($list as $row) { 
    fputcsv($FH, $row);
}
fclose($FH);
};

return response()->stream($callback, 200, $headers);}
public function exportjobsheekher(){$headers = [
    'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
,   'Content-type'        => 'text/csv'
,   'Content-Disposition' => 'attachment; filename=galleries.csv'
,   'Expires'             => '0'
,   'Pragma'              => 'public'
];

$list = User::where("category","4")->get()->toArray();

# add headers for each column in the CSV download
array_unshift($list, array_keys($list[0]));

$callback = function() use ($list) 
{
$FH = fopen('php://output', 'w');
foreach ($list as $row) { 
    fputcsv($FH, $row);
}
fclose($FH);
};

return response()->stream($callback, 200, $headers);}



}

