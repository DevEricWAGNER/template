<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.users', compact('users', 'roles'));
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
        if ($request->superadmin) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'login' => 'required',
                'civilite' => 'required',
                'firstname' => 'required',
                'lastname' => 'required',
                'superadmin' => 'required',
                'activ' => 'required',
            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'role_id' => 'required',
                'login' => 'required',
                'civilite' => 'required',
                'firstname' => 'required',
                'lastname' => 'required',
                'activ' => 'required',
            ]);
        }
        $data = $request->all();
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->login = $data['login'];
        $user->civilite = $data['civilite'];
        $user->firstname = $data['firstname'];
        $user->lastname = $data['lastname'];
        if ($request->superadmin) {
            $user->superadmin = 1;
            $user->role_id = 0;
        } else {
            $user->superadmin = 0;
            $user->role_id = $data['role_id'];
        }
        if ($data['activ'] == 'on') {
            $user->activ = 1;
        } else {
            $user->activ = 0;
        }
        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($user_id)
    {
        $user = User::find($user_id);
        return response()->json($user);
    }

    public function edit_project($user_id, $project_id)
    {
        $user = User::find($user_id);
        $user->last_project_modified_id = $project_id;
        $user->save();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = User::find($request->user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->login = $request->login;
        $user->civilite = $request->civilite;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        if ($request->superadmin) {
            $user->superadmin = 1;
            $user->role_id = 0;
        } else {
            $user->superadmin = 0;
            $user->role_id = $request->role_id;
        }
        if ($request->activ) {
            $user->activ = 1;
        } else {
            $user->activ = 0;
        }
        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        return true;
    }
}