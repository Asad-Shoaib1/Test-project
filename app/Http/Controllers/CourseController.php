<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
   
    public function create()
    {
        $course = Course::all();
        $user = User::all();
        return view('Courses.addcourse',compact('course','user'));
    }

    public function store(Request $request)
    {
       $request->validate([
        'coursename'=>'required',
       ]);
       course::create($request->all());
       return redirect()->back()->with('success','course created succeesfully');

    }
    public function show($id)
    {
        $user = User::find($id);      
        $test = User::where('id',Auth::id())->get('coursename');
        return view('Courses.mycourse',compact('test','user'));
    }

    public function edit(string $id)
    {
       return view('Courses.courseedit');
    }
    public function allcourses(){
        $course = Course::all();
        return view('Courses.allcourses',compact('course'));
    }
    public function addcourse($id){
        $course = Course::find($id);
        $data[] =$course->coursename;
        
        
         $user = Auth::user();

        //    $user->coursename =json_encode($course->coursename) ;
        //  $user->save();
         if ($user && $course) {
           
            $user->courses()->attach($course); 
            return redirect()->route('allcourses')->with('success','Course added in your profile Successfully');
            return response()->json(['success' => 'Course added successfully']);
        } else {
            return response()->json(['error' => 'Failed to add course']);
        }
       
       
    }
}