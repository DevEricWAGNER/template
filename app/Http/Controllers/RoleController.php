<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $role = new Role();
        $role->label = $data['label'];
        $role->commentaire = $data['commentaire'];
        $role->save();

        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($role_id)
    {
        $role = Role::find($role_id);
        return response()->json($role);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $role = Role::find($request->role_id);
        $role->label = $request->label;
        $role->commentaire = $request->commentaire;
        $role->save();

        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($role_id)
    {
        $role = Role::find($role_id);
        $role->delete();
        return true;
    }
}