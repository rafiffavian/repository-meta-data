<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return view('admin.modul-role.role-table',compact('role'));
    }
    public function create()
    {
       return view('admin.modul-role.role-create');
    }

    public function store(Request $request)
    {
       $role = Auth::user()->userole();
       $role->create($request->except('_token'));
       return redirect()->route('admin.role.table');
    }
}
