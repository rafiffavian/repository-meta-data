<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sim;
use App\Database;
use App\Table;
use App\User;
use App\Isitable;
use App\Tbrole;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function back($id)
    {
        return redirect(route('sim.show',$id));
        
    }

    public function post_index_table(Request $request, $id)
    {
        $id_sim = Database::find($id)->id_sim;
        $role = Auth::user()->id_role;
        $nama_database = Database::find($id);
        $input_text =  $request->text_search_table;
        $table = Table::where('name','ilike','%'. $input_text . '%')->where('id_database',$id)->orderBy('name', 'asc')->paginate(5);
        return view('admin.modul-table.isi_table-table',compact('table','nama_database','role','id_sim'));
    }

    public function create_data($id)
    {
        $id_database = $id;
        return view('admin.modul-table.isi_table-create',compact('id_database'));
    }

    public function store_data(Request $request, $id)
    {
        $data = $request->all();
        $data['id_user'] = Auth::user()->id; 
        $data['id_database'] = $id; 
        $save = Table::create($data);
        return redirect(route('database.show',$id));
    }

    public static function checkPriv($id_sim,$id_database,$id_table,$id_role)
    {
        if (Auth::user()->id_role == 1) {
            //for admin
            $dbDatabase = Tbrole::where([
               
                'id_sim' => $id_sim,
                'id_database' => $id_database,
                'id_table' => $id_table
            ])->first();
            
        } else {
            $dbDatabase = Tbrole::where([
               
                'id_sim' => $id_sim,
                'id_database' => $id_database, //7
                'id_table' => $id_table, //7
                'id_role' => $id_role
                
            ])->first();
        }
        // dd($dbDatabase->permission);
        return $dbDatabase;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nama_table = Table::find($id);
        $isiData = Isitable::where('id_table',$id)->get();
        return view('admin.modul-datatable.isi_data-table',compact('isiData','nama_table'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['id_user'] = Auth::user()->id; 
        $data['id_database'] = $id; 
        $save = Table::create($data);
        return redirect(route('database.show',$id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
