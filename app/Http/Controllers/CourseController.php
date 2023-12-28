<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::all();
        $user = User::all();
        return view('Courses.addcourse',compact('course','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'coursename'=>'required',
       ]);
       course::create($request->all());
       return redirect()->back()->with('success','course created succeesfully');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
             $user = User::all();
             
        $test = User::where('id',Auth::id())->get('coursename');
       
        
        return view('Courses.mycourse',compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       return view('Courses.courseedit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
