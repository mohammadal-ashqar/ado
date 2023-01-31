<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::latest()->get();
        return view('admin.packages.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Package::rules());

        $request->merge([
            'auther' => Auth::user()->name,
        ]);
        if ($request->hasFile('image')) {
            $data = $request->except('image','content_en','content_ar');
            $file = $request->file('image');
            $name = rand() . time() . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/package', $name, ['disk' => 'public']);
            $data['image'] = $path;
        }


        $data['content_en'] = json_encode($request->content_en);
        $data['content_ar'] = json_encode($request->content_ar);

        Package::create($data);
        $notification =  array(
            'message' => 'تم الاضافة بنجاح',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {

        $n = json_decode($package->content_ar);
        $n2 = json_decode($package->content_en);
        return view('admin.packages.edit',compact('package','n','n2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $request->validate(Package::updateRules());
        $request->merge([
            'auther' => Auth::user()->name
        ]);
        $old_image = $package->image;
        $data = $request->except('image','content_en','content_ar');
        $data['image'] = $old_image;
        $data['content_en'] = json_encode($request->content_en);
        $data['content_ar'] = json_encode($request->content_ar);
        if ($request->hasFile('image')) {
            $data = $request->except('image','content_en','content_ar');
            $file = $request->file('image');
            $name = rand() . time() . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/package', $name, ['disk' => 'public']);
            $data['image'] = $path;

            Storage::disk('public')->delete($old_image);
        }


        $package->update($data);
        $notification =  array(
            'message' => 'تم تعديل الخبر بنجاح',
            'alert-type' => 'success'
        );


        return redirect()->route('admin.package.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $isDeleted = $package->delete();
        Storage::disk('public')->delete($package->image);

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
