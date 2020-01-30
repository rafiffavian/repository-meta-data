<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sim;
use App\Database;
use App\Table;
use App\User;
use App\Dbrole;
use App\Tbrole;
use Illuminate\Support\Facades\Auth;

class TbpermissionController extends Controller
{
    public function index($id,$sim_id,$id_role)
    {
        $auth_id = Auth::user()->id;
        $id_roles = $id_role;
        $nama_database = Database::find($id);
        $table = Table::where('id_database',$id)->get();
        
        return view('admin.modul-permission.tb-table',compact('sim_id','id','nama_database','auth_id','table','id_roles'));
    }

    public function store(Request $request, $id,$sim_id,$id_role)
    {
        $data = $request->all();
        $data['id_user'] = Auth::user()->id;
        $data['id_sim'] = $sim_id;
        $data['id_role'] = $id_role;
        $data['id_database'] = $id;
        if (!empty($data['permission'])) {
            $permissions = $data['permission'];
        }


        Tbrole::where([
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
                $save = Tbrole::updateOrCreate(
                    [
                        'id_table' => $key,
                        'id_user' => Auth::user()->id,
                        'id_database' => $id,
                        'id_role' => $id_role,
                        'id_sim' => $sim_id
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


        return redirect(route('tbpermission.index', ['sim_id'=>$sim_id,'id'=>$id,'id_role'=>$id_role]));
    }

    public static function getStatusCheck($id_roles, $id_sim_tb_roles, $id_db_tb_roles, $id_tb_roles)
    {
        
        $data = Tbrole::where([
            "id_role" => $id_roles,
            'id_sim' => $id_sim_tb_roles,
            'id_database' => $id_db_tb_roles,
            'id_table' => $id_tb_roles
        ])->first();
        
        return $data;
    }
}
