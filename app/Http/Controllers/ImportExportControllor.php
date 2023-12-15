<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;

class ImportExportControllor extends Controller
{
    public function view(){
        return view('import');
    }

    public function import()
    {
        $data = Excel::ToArray(new UsersImport, request()->file('file'))[0];
        Excel::Import(new UsersImport, request()->file('file'));
        return view('viewData', compact('data'));
    }

    public function export(){

        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
