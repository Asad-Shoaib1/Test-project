@extends('layouts.sidebar')
@section('my-course')
<h1>my course</h1>
<table class="table ">
    
    <thead>
     
        <th scope="col">id</th>
        <th scope="col">Course Name</th>
         </tr>
    </thead>
    <tbody>
       
      <tr>
         @foreach($test as $test)
        <th scope="row">{{Auth::user()->id}}</th>
        <td>{{$test->coursename}}</td>
        @endforeach
        
      </tr>
      
    
    </tbody>
  </table>
@endsection