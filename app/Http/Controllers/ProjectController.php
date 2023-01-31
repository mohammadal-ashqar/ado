<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects= Project::latest()->get();
        return view("admin.projects.index",compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Project::rules());
        $request->merge([
         'auther'=>Auth::user()->name,
        ]);
        $data = $request->all();

        if($request->hasFile('image')){
         $data = $request->except('image','files');
         $file = $request->file('image');
         $name = rand().'_'.time().'_'.$file->getClientOriginalName();
         $path = $file->storeAs('uploads/projects',$name,['disk'=>'public']);
         $data['image'] = $path;
        }

        if ($request->hasFile('files')) {
            $data_images[] = [];
            $x = 0;
            // $data = $request->except('files');
            foreach ($request->file('files') as $files) {
                $name = rand() . time() . $files->getClientOriginalName();
                $path = $files->storeAs('uploads/projects_items', $name, ['disk' => 'public']);
                $data_images[$x] = $path;
                $data['files'] = $data_images;
                $x++;
            }
        }


        Project::create($data);
        $notification = array(
                 'message'=>'تمت عملية الاضافة بنجاح',
                 'alert-type'=>'success'
        );

        return back()->with($notification);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit',compact('project'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate(Project::updateRules());
        $request->merge([
         'auther'=>Auth::user()->name
        ]);
        $old_image = $project->image;
        $old_files = $project->files;

        $data= $request->all();
        $data['image']=$old_image;
        $data['files']=$old_files;


        if($request->hasFile('image')){
         $data = $request->except('image','files');
         $file = $request->file('image');
         $name = time().'_'.rand().'_'.$file->getClientOriginalName();
         $path =  $file->storeAs('uploads/projects',$name,['disk'=>'public']);
         $data['image']=$path;
         Storage::disk('public')->delete($old_image);
        }

        if ($request->hasFile('files')) {
         $data_images [] =[];
         $x=0;
         foreach($request->file('files')  as $file){
             $name = time().'_'.rand().'_'.$file->getClientOriginalName();
             $path = $file->storeAs('uploads/project_images',$name,['disk'=>'public']);
             $data_images[$x]=$path;
             $data['files'] = $data_images;
         }
         foreach($old_files as $file){
             Storage::disk('public')->delete($file);
         }

        }

        $project->update($data);

        $notification = array(
         'message'=>'تمت الاضافة بنجاح',
         'alert-type'=>'success'
        );
        return redirect()->route('admin.project.index')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
