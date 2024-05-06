<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $site = Project::where('id', 1)->first();
        return view('admin.project', compact('site'));
    }

    public function update(Request $request)
    {
        date_default_timezone_set("Europe/Paris");
        $site = Project::where('id', 1)->first();
        $data = $request->all();

        if ($request->hasFile('siteLogo')) {
            $image = $request->file('siteLogo');
            $imageFullName = Carbon::now()->format('d-m-Y_H-i-s_v');
            $imageName = $imageFullName . '.png';
            // $site->siteLogo delete image from folder
            if (file_exists(app_path('storage/' . $site->id . '/' . $site->siteLogo))){
                unlink(app_path('storage/' . $site->id . '/' . $site->siteLogo));
            }
            $image->move(app_path('storage/' . $site->id), $imageName);
            $data["siteLogo"] = $imageFullName;
        } else {
            $data["siteLogo"] = $site->siteLogo;
        }

        $site->update($data);

        return redirect()->back()->with('success', 'Site settings updated successfully');
    }
}
