<?php

namespace App\Http\Controllers;

use App\Models\Project;
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
        return response()->json($project);
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
            // $site->siteLogo delete image from folder
            if (file_exists(app_path('storage/' . $site->id . '/' . $site->siteLogo ))){
                unlink(app_path('storage/' . $site->id . '/' . $site->siteLogo));
            }
            $image->move(app_path('storage/' . $site->id), $imageName);
            $data["siteLogo"] = $imageName;
        } else {
            $data["siteLogo"] = $site->siteLogo;
        }

        $site->update($data);

        return redirect()->back()->with('success', 'Site settings updated successfully');
    }
}