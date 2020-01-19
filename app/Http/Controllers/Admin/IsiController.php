<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Isitable;
use Illuminate\Support\Facades\Auth;
use App\Download;
use App\Table;

class IsiController extends Controller
{
    public function create($id)
    {
        $id_table = $id;
        return view('admin.modul-datatable.datatable-create',compact('id_table'));
    }

    public function store(Request $request, $id)
    {
        $data = $request->all();
        $data['id_user'] = Auth::user()->id; 
        $data['id_table'] = $id; 
        $save = Isitable::create($data);
        return redirect(route('table.show',$id));
    }

    public function download($id)
    {
        $id_table = $id;
        $nama_table = Table::find($id);
        $download = Download::where('id_table',$id)->get();
        return view('admin.modul-datatable.datatable-download',compact('id_table','download','nama_table'));
    }

    public function back($id)
    {
        return redirect(route('table.show',$id));
        
    }

}
