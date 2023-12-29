<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = User::with('courses')->get();
        // dd($students);
       return view('students-data',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = course::all();
        return view('createstudents',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
       $validator = Validator::make($request->all(),[
        'name'=>['required'],
        'lastname'=>['required'],
        'email'=>['required'],
        
        'password'=>['required','min:8']
       ]);
       
      
             $user = new User;
             $user->name = $request->name;
             $user->lastname = $request->lastname;
             $user->email = $request->email;
             $user->phoneno = $request->phoneno;
             $user->address = $request->address;
             $user->coursename = json_encode($request->coursename);
            
             $user->save();
             $courseNames = $request->input('coursename');


$selectedCourses = Course::whereIn('coursename', $courseNames)->pluck('id')->toArray();
if ($selectedCourses !== null) {
    $user->courses()->attach($selectedCourses);
}
      return redirect()->route('student.show');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // $user = User::find($id);
         
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        
        return view('new',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
       $request->validate([
        'name'=>'required',
       
       ]);

       DB::table('users')->where('id',$id)->update([
        'name'=> $request->name,
    ]);
       return redirect()->route('student.show');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        
        $user = User::find($id); 
        $user->delete(); 
        return redirect()->route('student.show');
        
    }
    public function destroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }
}
