<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:blog-list|blog-create|blog-edit|blog-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:blog-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:blog-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Blog::rules());
        $request->merge([
            'auther'=>Auth::user()->name,
        ]);
        $data = $request->except('tag_ar','tag_en');
        if ($request->hasFile('image')) {
            $data = $request->except('image');
            $file = $request->file('image');
            $name = time() . '_' . rand() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/blog', $name, ['disk' => 'public']);
            $data['image'] = $path;
        }
          Blog::create($data);
          $notification = array(
            'message' => 'تمت الاضافة بنجاح',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit',compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate(Blog::updateRules());
        $old_image= $blog->image;

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data = $request->except('image');
            $file= $request->file('image');
            $name = time().'_'.rand().'_'.$file->getClientOriginalName();
            $path = $file->storeAs('uploads/blog',$name,['disk'=>'public']);
            $data['image']=$path;
            Storage::disk('public')->delete($old_image);
        }
        $blog->update($data);
        $notification = array(
            'message'=>'تم التعديل بنجاح',
            'alert-type'=>'success'
        );
        return redirect()->route('admin.blog.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $isDeleted = $blog->delete();
        Storage::disk('public')->delete($blog->image);

        if ($isDeleted) {
            return response()->json([
                'title' => 'تم الحذف بنجاح',
                'text' => 'poster Deleted successfully',
                'icon' => 'success'
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                'title' => 'هناك خطأ لم تتم عملية الحذف',
                'text' => 'Failed to delete',
                'icon' => 'error'
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
