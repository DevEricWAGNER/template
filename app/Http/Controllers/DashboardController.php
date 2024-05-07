<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Project;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // user count superadmin ou role == administrateur
        $role_admin = Role::where('label', 'Administrateur')->first();
        $user_count = User::where('superadmin', 1)->orWhere('role_id', $role_admin->id)->count();

        $pages = Page::where('activ', 1)->count();

        return view('admin.index', compact('user_count', 'pages'));
    }

    public function roles()
    {
        $roles = Role::all();
        return $roles;
    }

    public function projects()
    {
        $projects = Project::all();
        return $projects;
    }
}