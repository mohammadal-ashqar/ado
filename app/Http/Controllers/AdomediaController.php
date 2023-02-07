<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use App\Models\Client;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Package;
use App\Models\Team;
use App\Models\Visit;

class AdomediaController extends Controller
{
    public function index($page)
    {

        if ($page == 'index') {
            $services = Service::latest()->take(3)->get();
            $projects = Project::latest()->take(6)->get();
            $blog = Blog::latest()->take(3)->get();
        } else {
            $services = Service::latest()->get();
            $projects = Project::latest()->get();
            $blog = Blog::latest()->paginate(9);
        }

        $team = Team::latest()->take(4)->get();
        $polls = Poll::latest()->get();
        $clients = Client::latest()->get();
        $packages = Package::latest()->take(3)->get();
        $monthlyVisits = Visit::whereMonth('created_at', date('m'))->first();
        if (isset($monthlyVisits->visits)) {
            $monthlyVisits->visits += 1;
            $monthlyVisits->save();
        } else {
            Visit::create(['visits' => 1]);
        }

        return view('adomedia.en.' . $page, compact('polls', 'clients', 'services', 'projects', 'team', 'blog', 'packages'));
    }
    public function home()
    {

        $polls = Poll::latest()->get();
        $clients = Client::latest()->get();
        $services = Service::latest()->take(3)->get();
        $projects = Project::latest()->take(6)->get();
        $team = Team::latest()->take(4)->get();
        $blog = Blog::latest()->take(3)->get();
        $packages = Package::latest()->take(3)->get();
        $monthlyVisits = Visit::whereMonth('created_at', date('m'))->first();
        if (isset($monthlyVisits->visits)) {
            $monthlyVisits->visits += 1;
            $monthlyVisits->save();
        } else {
            Visit::create(['visits' => 1]);
        }
        return view('adomedia.en.index', compact('polls', 'clients', 'services', 'projects', 'team', 'blog', 'packages'));
    }
    public function index_ar($page)
    {
        return view('adomedia.ar.' . $page);
    }

    public function service($id)
    {
        $service = Service::findOrFail($id);
        $list = json_decode($service->list_en);
        $services = Service::where('id', '<>', $id)->get();
        $service->visits += 1;
        $service->save();
        return view('adomedia.en.services_details', compact('services', 'service', 'list'));
    }

    public function portfolio($id)
    {
        $projects = Project::findOrFail($id);
        $projects->visits += 1;
        $projects->save();
        return view('adomedia.en.works', compact('projects'));
    }
    public function blog($id)
    {
        $blog = Blog::findOrFail($id);
        $list = Blog::where('id', '<>', $id)->take(3)->get();
        $blog->visits += 1;
        $blog->save();
        return view('adomedia.en.blog_details', compact('blog', 'list'));
    }
}
