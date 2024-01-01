@extends('layouts.sidebar')
@section('my-course')
<h1>my course</h1>
<table class="table table-dark ">
    
    <thead>


    {{-- <p>Course ID: {{ $course->id }}</p>
    <p>Course Name: </p> --}}
    <hr>

     
     
        <th scope="col"> Course id</th>
        <th scope="col">Course Name</th>
         </tr>
    </thead>
    <tbody>
       
      <tr> @foreach ($user->courses as $course)
         {{-- @foreach($test as $test) --}}
        <th scope="row">{{ $course->id }}</th>
       
        <td>{{ $course->coursename }}</td>
        {{-- @endforeach --}}
       
      </tr> @endforeach
      
    
    </tbody>
  </table>
@endsection