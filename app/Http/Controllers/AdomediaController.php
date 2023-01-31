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

class AdomediaController extends Controller
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

        return view('adomedia.en.'.$page,compact('polls','clients','services','projects','team','blog','packages'));
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

        return view('adomedia.en.index',compact('polls','clients','services','projects','team','blog','packages'));
    }
    public function index_ar($page)
    {
        return view('adomedia.ar.'.$page);
    }

    public function service($id)
    {
        $service = Service::findOrFail($id);
        $list = json_decode($service->list_en);
        $services = Service::where('id','<>',$id)->get();
        return view('adomedia.en.services_details',compact('services','service','list'));
    }

    public function portfolio($id)
    {
        $projects = Project::findOrFail($id);
        return view('adomedia.en.works',compact('projects'));
    }
    public function blog($id)
    {
        $blog = Blog::findOrFail($id);
        $list = Blog::where('id','<>',$id)->take(3)->get();
        return view('adomedia.en.blog_details',compact('blog','list'));
    }
}
