<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Controllers\Controller;
use App\Models\Specialty;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // $doctors = doctor::all();
        // return view("doctors.index", compact("doctors"));

        $doctors = Doctor::with("specialty")->get();
         return view("doctors.index", compact("doctors"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("doctors.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $doctors=new doctor;
        $doctors->name=$request->name;
        $doctors->email=$request->email;
        $doctors->phone=$request->phone;
        $doctors->specialty_id=$request->specialty_id;
        $doctors->save();
        return redirect('doctors');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // return $id;
        $doctors=doctor::findOrFail($id);
        $specialties = Specialty::all();
        return view('doctors.edit', compact('doctors','specialties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $doctors=doctor::findOrFail($id);
        $doctors->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'specialty_id'=>$request->specialty_id
       
        ]);
        return redirect()->route('doctors.index');
        // return redirect('doctors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       doctor:: findOrFail($id)->delete();
       return redirect()->route('doctors.index');
    }
}
