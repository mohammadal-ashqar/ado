<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Service;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $projects = Project::orderByDesc('visits')->get();
        $users = User::count();
        $services = Service::orderByDesc('visits')->get();
        $visits = Visit::latest()->first();

        return view('admin.index',compact('projects','users','services','visits'));
    }

    public function profile()
    {
        return view('admin.profile');
    }
    public function visits()
    {
        $visits = Visit::latest()->get();
        return view('admin.visits',compact('visits'));
    }
}
