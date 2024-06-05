<?php

namespace App\Http\Controllers;

use App\Models\FacilityPhoto;
use App\Models\SchoolFacility;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SchoolAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        return view('school.index');
    }


    public function page(){
        return view('school.add');
    }
  
    public function store(Request $request){
        $request->validate([ 
            'name'=>['nullable', 'string'],
            'description'=>['nullable', 'string'],
            'email'=>['nullable', 'string'],
            'phone'=>['nullable', 'string'],
            'facebook'=>['nullable', 'string'],
            'instagram'=>['nullable', 'string'],
            'whatsapp'=>['nullable', 'string'],
        ]);

        $school = new SchoolFacility;
        $school->name = $request->name;
        $school->slug = Str::slug($request->name);
        $school->description = $request->description;
        $school->phone = $request->phone;
        $school->facebook = $request->facebook;
        $school->instagram = $request->instagram;
        $school->whatsapp = $request->whatsapp;
        $school->user_id = auth()->user()->id;

        if($school->save()){
            return redirect()->route('school-upload')->with('success',  'Uploaded Successful');
        }else{
            return back()->with('error', 'Something went worry');
        }

    }


    public function edit($id){
        $school = SchoolFacility::find($id);
        return view('school.edit', compact('school'));
    }


    public function update(Request $request, $id){
        $request->validate([ 
            'name'=>['nullable', 'string'],
            'description'=>['nullable', 'string'],
            'email'=>['nullable', 'string'],
            'phone'=>['nullable', 'string'],
            'facebook'=>['nullable', 'string'],
            'instagram'=>['nullable', 'string'],
            'whatsapp'=>['nullable', 'string'],
        ]);

        $school =  SchoolFacility::find($id);
        $school->name = $request->input('name');
        $school->slug = Str::slug($request->input('name'));
        $school->description = $request->input('description');
        $school->phone = $request->input('phone');
        $school->facebook = $request->input('facebook');
        $school->instagram = $request->input('instagram');
        $school->whatsapp = $request->input('whatsapp');
        $school->user_id = auth()->user()->id;

        if($school->save()){
            return back()->with('success', 'Updated Successful');
        }else{
            return back()->with('error', 'Something went worry');
        }

    }

    public function delete($id){
        $school = SchoolFacility::find($id);
        if($school->save()){
            return back()->with('success', 'Delete Successful');
        }else{
            return back()->with('error', 'Something went worry');
        }
    }

    // storing for photo
    
    public function photo(){
        $photo = FacilityPhoto::orderBy('id', 'desc')->get();
        return view('', compact('photo'));
    }

    public function createPhoto(){
        $facility = SchoolFacility::orderBy('id', 'desc')->get();
        return view('', compact('facility'));
    }


    public function storePhoto(Request $request){
        $request->validate([ 
            'image'=>['nullable', 'image', 'mimes:png,jpg,jpeg,pdf']
        ]);

        // upload of multiple image
        $photo = new FacilityPhoto;
        $photo->image = upload_multiple_images('upload/facility/photo', 'image');
        $photo->facility_id = $request->facility_id;
        $photo->user_id = auth()->user()->id;

        if($photo->save()){
            return redirect()->route('school-upload')->with('success',  'Uploaded Successful');
        }else{
            return back()->with('error', 'Something went worry');
        }

    }

    public function editPhoto($id){
        $photo = FacilityPhoto::find($id);
        return view('', compact('photo'));
    }

}