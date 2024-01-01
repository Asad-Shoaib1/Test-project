<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::with('courses')->get();
       return view('students-data',compact('students'));
    }
    public function create()
    {
        $courses = course::all();
        return view('createstudents',compact('courses'));
    }
 public function store(Request $request)
    {
       Validator::make($request->all(), [
            'name' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email'], 
            'password' => ['required', 'min:8'],
        ]);
        
$user = new User;
$user->name = $request->name;
$user->lastname = $request->lastname;
$user->email = $request->email;
$user->phoneno = $request->phoneno;
$user->address = $request->address;
$user->password = Hash::make($request->password);

$user->save();

return redirect()->route('student.show');

 }
    public function profile()
    {
        $users = User::where('id',Auth::id())->get();
       
       return view('profile',compact('users'));
         
    }
    public function profileedit(){
        $user = Auth::user();
        // dd($user);
       
     
      
        return view('profile-edit',compact('user'));
    }
    public function profileupdate(Request $request, string $id){
      $user= $request->validate([
        'name'=>'required',
        'email'=>'required',
       ]);
      DB::table('Users')->where('id',$id)->update($user);
      return redirect()->route('profile')->with('success','Profile Updated Successfully');
        
    }
    public function edit(string $id)
    {
        $user = User::find($id);
        
        return view('new',compact('user'));
    }

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
