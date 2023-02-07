<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:role-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $roles = Role::where('name','<>','admin')->orderBy('id', 'DESC')->paginate(5);
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        $roles = Role::orderBy('id', 'DESC')->get();
        $permission = Permission::get();
        return view('admin.roles.create', compact('permission', 'roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
        $notification =  array(
            'message' => 'Create Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.role.index')
            ->with($notification);
    }

    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->where("role_has_permissions.role_id", $id)
            ->get();

        return view('admin.roles.show', compact('role', 'rolePermissions'));
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('admin.roles.edit', compact('role', 'permission', 'rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));
        $notification =  array(
            'message' => 'Update Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.role.index')
            ->with($notification);
    }

    public function destroy(Role $role)
    {
        $isDeleted= DB::table("roles")->where('id', $role->id)->delete();


            // $isDeleted = $role->delete();
            if ($isDeleted) {
                return response()->json([
                    'title'=>'Success',
                    'text'=>'Admin Deleted successfully',
                    'icon'=>'success'
                ], Response::HTTP_OK);
            }else {
                return response()->json([
                    'title'=>'Failed',
                    'text'=>'Failed to delete',
                    'icon'=>'error'
                ], Response::HTTP_BAD_REQUEST);
            }
        }
    }
