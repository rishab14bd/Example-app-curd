<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Student::all();
        // dd($data->toArray());
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Student;
        $data->name = $request->name;
        $data->f_name = $request->f_name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->number = $request->number;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' . $ext;
            $file->move('img/',$filename);
            $data->image = $filename;
        }
        $data->save();
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Student::find($id);
        // dd($data->toArray());
        return view('update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Student::find($id);
        // dd($data->toArray());
        $data->name = $request->name;
        $data->f_name = $request->f_name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->number = $request->number;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' . $ext;
            $file->move('img/',$filename);
            $data->image = $filename;
        }
        $data->save();
        return redirect()->route('student.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Student::find($id);
        // dd($data->toArray());
        $data->delete();
        return redirect()->route('student.index');
    }
}
