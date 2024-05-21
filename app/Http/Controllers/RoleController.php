<?php

namespace App\Http\Controllers;

use App\Exports\RolesExport;
use App\Imports\ExcelDataImport;
use App\Imports\RolesImport;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::where('deleted_at', null)->orderBy('created_at', 'DESC')->paginate(10);
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        $editing = false;
        return view('roles.create', compact('editing'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:25',
            'slug' => 'required|string|max:25',
            'description' => 'required|string|max:255',
        ]);

        $role = new Role();
        $role->name = $request->name;
        $role->slug = $request->slug;
        $role->description = $request->description;
        $role->deleted_at = null;
        $role->save();
        return redirect()->route('roles.index')->with('success', 'Role added successfully.');
    }

    public function show($id)
    {
        $role = Role::where('deleted_at', null)->where('id', $id)->first();

        return view('roles.show', compact('role'));
    }

    public function edit($id)
    {
//        $this->authorize('role.edit');

        $editing = true;
        $role = Role::where('deleted_at', null)->where('id', $id)->first();
        return view('roles.create', compact(['editing', 'role']));
    }

    public function update($id, Request $request)
    {
//        $this->authorize('role.edit');

        $request->validate([
            'name' => 'required|string|max:25',
            'slug' => 'required|string|max:25',
            'description' => 'required|string|max:255',
        ]);


        $role = Role::where('id', $id)->firstOrFail();
        $role->name = $request->name;
        $role->slug = $request->slug;
        $role->description = $request->description;
        $role->save();
        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    public function destroy($id)
    {
//        $this->authorize('can.delete');

        $role = Role::where('id', $id)->firstOrFail();
        $role->deleted_at = now();
        $role->save();
        return redirect()->route('roles.index')->with("success", "Role deleted successfully!");
    }
}
