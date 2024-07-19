<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        return view('admin.project');
    }

    public function infos($project_id)
    {
        $project = Project::find($project_id);
        $users = $project->users;
        $allUsers = User::all();
        $me = Auth::user()->id;
        return response()->json(['project' => $project, 'users' => $users, 'allUsers' => $allUsers, 'me' => $me]);
    }

    public function update(Request $request)
    {
        date_default_timezone_set("Europe/Paris");
        $data = $request->all();
        $site = Project::where('id', $data["project_id"])->first();


        foreach ($data as $key => $value) {
            $data[$key] = (string) $value;
        }

        if ($request->hasFile('siteLogo')) {
            $image = $request->file('siteLogo');
            $imageFullName = Carbon::now()->format('d-m-Y_H-i-s_v');
            $imageName = $imageFullName . '.' . $image->getClientOriginalExtension();
            if ($site->siteLogo != "") {
                if (file_exists(app_path('storage/' . $site->id . '/' . $site->siteLogo ))){
                    unlink(app_path('storage/' . $site->id . '/' . $site->siteLogo));
                }
            }
            $image->move(app_path('storage/' . $site->id), $imageName);
            $data["siteLogo"] = $imageName;
        }

        if ($request->hasFile('siteEmailPhoto')) {
            $image = $request->file('siteEmailPhoto');
            $imageFullName = Carbon::now()->format('d-m-Y_H-i-s_v');
            $imageName = $imageFullName . '.' . $image->getClientOriginalExtension();
            if ($site->siteEmailPhoto != "") {
                if (file_exists(app_path('storage/' . $site->id . '/' . $site->siteEmailPhoto ))){
                    unlink(app_path('storage/' . $site->id . '/' . $site->siteEmailPhoto));
                }
            }
            $image->move(app_path('storage/' . $site->id), $imageName);
            $data["siteEmailPhoto"] = $imageName;
        }
        if (isset($data["googleCapt_siteKey"]) || isset($data["googleCapt_secretKey"]) || isset($data["googleAnalytics_code"]) || isset($data["stripe_key"]) || isset($data["stripe_secret"])) {
            if ($request->googleCapt_activ == 'on') {
                $data["googleCapt_activ"] = 1;
            } else {
                $data["googleCapt_activ"] = 0;
            }
            if ($request->googleAnalytics_activ == 'on') {
                $data["googleAnalytics_activ"] = 1;
            } else {
                $data["googleAnalytics_activ"] = 0;
            }
            if ($request->stripe_activ == 'on') {
                $data["stripe_activ"] = 1;
            } else {
                $data["stripe_activ"] = 0;
            }
        }

        Log::create([
            'user_id' => Auth::user()->id,
            'action' => 'update site settings',
            'description' => 'Updating site settings from ' . json_encode($site) . ' to ' . json_encode($data),
        ]);
        $site->update($data);




        return redirect()->back()->with('success', 'Site settings updated successfully');
    }

    public function removeUser($project_id, $user_id)
    {
        $project = Project::find($project_id);
        $project->users()->detach($user_id);
        $users = $project->users;
        $allUsers = User::all();
        $me = Auth::user()->id;
        return response()->json(['project' => $project, 'users' => $users, 'allUsers' => $allUsers, 'me' => $me]);
    }

    public function addUser($project_id, $user_id)
    {
        $project = Project::find($project_id);
        $project->users()->attach($user_id);
        $users = $project->users;
        $allUsers = User::all();
        $me = Auth::user()->id;
        return response()->json(['project' => $project, 'users' => $users, 'allUsers' => $allUsers, 'me' => $me]);
    }

    public function transferOwnerShip($project_id, $user_id)
    {
        $project = Project::find($project_id);
        // si je suis propriétaire du projet je transfert la propriété à un autre utilisateur en le retirant de la liste des utilisateurs et je m'ajoute à la liste des utilisateurs
        if ($project->user_id == Auth::user()->id) {
            $project->user_id = $user_id;
            $project->save();
            $project->users()->attach(Auth::user()->id);
            $project->users()->detach($user_id);
        }

        $projectAfter = Project::find($project_id);
        $users = $project->users;
        $allUsers = User::all();
        $me = Auth::user()->id;
        return response()->json(['project' => $projectAfter, 'users' => $users, 'allUsers' => $allUsers, 'me' => $me]);
    }
}