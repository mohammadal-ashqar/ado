<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Poll;
use App\Models\Team;
use App\Models\Client;
use App\Models\Package;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdomediaArController extends Controller
{
    public function index($page)
    {

        $polls = Poll::latest()->get();
        $clients = Client::latest()->get();
        $services = Service::latest()->take(3)->get();
        $projects = Project::latest()->take(5)->get();
        $team = Team::latest()->take(4)->get();
        $blog = Blog::latest()->take(3)->get();
        $packages = Package::latest()->take(3)->get();

        return view('adomedia.ar.'.$page,compact('polls','clients','services','projects','team','blog','packages'));
    }
    public function home()
    {

        $polls = Poll::latest()->get();
        $clients = Client::latest()->get();
        $services = Service::latest()->take(3)->get();
        $projects = Project::latest()->take(5)->get();
        $team = Team::latest()->take(4)->get();
        $blog = Blog::latest()->take(3)->get();
        $packages = Package::latest()->take(3)->get();

        return view('adomedia.ar.index',compact('polls','clients','services','projects','team','blog','packages'));
    }
    public function index_en($page)
    {
        return view('adomedia.en.'.$page);
    }

    public function service($id)
    {
        $service = Service::findOrFail($id);
        $list = json_decode($service->list_ar);
        $services = Service::where('id','<>',$id)->get();
        return view('adomedia.ar.services_details',compact('services','service','list'));
    }

    public function portfolio($id)
    {
        $projects = Project::findOrFail($id);
        return view('adomedia.ar.works',compact('projects'));
    }
    public function blog($id)
    {
        $blog = Blog::findOrFail($id);
        $list = Blog::where('id','<>',$id)->take(3)->get();
        return view('adomedia.ar.blog_details',compact('blog','list'));
    }
}
