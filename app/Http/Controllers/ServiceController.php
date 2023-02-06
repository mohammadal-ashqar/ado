<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class ServiceController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:service-list|service-create|service-edit|service-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:service-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:service-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:service-delete', ['only' => ['destroy']]);
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->get();
        return  view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(Service::rules());

        $request->merge([
            'auther' => Auth::user()->name,
        ]);
        $data = $request->except('list_en','list_ar','image');
        $data['list_en'] = json_encode($request->list_en);
        $data['list_ar'] = json_encode($request->list_ar);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = rand() . time() . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/service', $name, ['disk' => 'public']);
            $data['image'] = $path;
        }
        Service::create($data);
        $notification =  array(
            'message' => 'تم الاضافة بنجاح',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {

        $n = json_decode($service->list_ar);
        $n2 = json_decode($service->list_en);
        return view('admin.services.edit',compact('service','n','n2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate(Service::rules());

        $request->merge([
            'auther' => Auth::user()->name,
        ]);
        $old_image = $service->image;
        $data = $request->except('list_en','list_ar','image');
        $data['list_en'] = json_encode($request->list_en);
        $data['list_ar'] = json_encode($request->list_ar);
        $data['image'] = $old_image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = rand() . time() . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/service', $name, ['disk' => 'public']);
            $data['image'] = $path;
            Storage::disk('public')->delete($old_image);
        }
        $service->update($data);
        $notification =  array(
            'message' => 'تم تعديل الخبر بنجاح',
            'alert-type' => 'success'
        );


        return redirect()->route('admin.service.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $isDeleted = $service->delete();
        Storage::disk('public')->delete($service->image);
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
