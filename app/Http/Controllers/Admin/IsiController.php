<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Isitable;
use Illuminate\Support\Facades\Auth;

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
}
