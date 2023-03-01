<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\TenantProfileRequest;

class TenantController extends Controller
{
    public function create(){
        return view('admin.tenant.register_tenant');
    }

    public function index(){
        return view('admin.tenant.index');
    }

    public function store(TenantProfileRequest $request){
        $data = $request->validated();

        $tenantProfile = new TenantProfile();
        $tenantProfile->name =$data['name'];
        $tenantProfile->email =$data['email'];
        $tenantProfile->phone =$data['phone'];
        $tenantProfile->id_number =$data['id_number'];

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time(). '.' .$file->getClientOriginalExtension();
            $file->move('upload/tenantsImg/', $filename);
            $tenantProfile->image = $filename;
        }

        if($request->hasfile('image_identity')){
            $fileimg = $request->file('image_identity');
            $filenames = time().'.'.$fileimg->getClientOriginalExtension();
            $fileimg->move('upload/tenantsImg/', $filenames);
            $tenantProfile->image_identity = $filenames;
        }
        $tenantProfile->address =$data['address'];
        $tenantProfile->occupation_status =$data['occupation_status'];
        $tenantProfile->occupation_place =$data['occupation_place'];
        $tenantProfile->emergency_contact_person =$data['emergency_contact_person'];
        $tenantProfile->emergency_contact_number =$data['emergency_contact_number'];
        $tenantProfile->save();

        return redirect()->route('index');
    }
}
