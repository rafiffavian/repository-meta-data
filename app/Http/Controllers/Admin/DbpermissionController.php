<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Sim;
use App\Database;
use App\Table;
use App\User;
use App\Dbrole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DbpermissionController extends Controller
{
    public function index($id, $id_role)
    {
        $auth_id = Auth::user()->id;
        $id_roles = $id_role;
        $nama_sim = Sim::find($id);
        $database = Database::where('id_sim',$id)->get();
        return view('admin.modul-permission.db-table',compact('database','nama_sim','auth_id','id_roles'));
    }

    public function store(Request $request, $id, $id_role)
    {
        $data = $request->all();
        $data['id_user'] = Auth::user()->id;
        $data['id_role'] = $id_role;
        $data['id_sim'] = $id;
        if (!empty($data['permission'])) {
            $permissions = $data['permission'];
        }


        Dbrole::where([
            'id_user' => $data['id_user'],
        ])->update([
            'permission' => 0
        ]);

        if (!empty($permissions)) {
            foreach ($permissions as $key => $z) {
                if ($z === 'on') {
                    $check = 1;
                } else {
                    $check = 0;
                }

                // $result[$key] = [
                //     'id_sim' => $key,
                //     'id_user' => Auth::user()->id,
                //     'permission' => $check
                // ];
                $save = Dbrole::updateOrCreate(
                    [
                        'id_database' => $key,
                        'id_user' => Auth::user()->id,
                        'id_sim' => $id,
                        'id_role' => $id_role
                    ],
                    [
                        'permission' => $check
                    ]
                );
                // $save->id_sim = $key;
                // $save->id_user =  Auth::user()->id;
                // $save->permission = $check;
                // $save->save();
            }
        }


        return redirect(route('dbpermission.index', ['id'=>$id,'id_role'=>$id_role]));
    }

    public static function getStatusCheck($id_roles, $id_sim_db_roles, $id_db_roles)
    {
        $data = Dbrole::where([
            "id_role" => $id_roles,
            'id_sim' => $id_sim_db_roles,
            'id_database' => $id_db_roles
        ])->first();

        return $data;
    }
}
