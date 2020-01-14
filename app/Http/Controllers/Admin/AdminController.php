<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $admin = User::all();
        return view('admin.modul-user.admin-table',compact('admin'));
    }
    public function create()
    {
       $role = Role::all();
       return view('admin.modul-user.admin-create',compact('role'));
    }

    public function store(Request $request)
    {
       $data = $request->all();
       $data['password'] = bcrypt($request->password); 
       $data['id_user'] = Auth::user()->id;
       $save = User::create($data);
       return redirect()->route('admin.user.table');
    }
}
