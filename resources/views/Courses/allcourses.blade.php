@extends('layouts.sidebar')
@section('allcourses')
<h1>Allcourses</h1>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<table class="table table-dark">
    
    <thead>
     
        <th scope="col">id</th>
        <th scope="col">Course Name</th>
       
        
      </tr>
    </thead>
    <tbody>
        
        <tr>@foreach($course as $course)  
      <tr>
        <td>{{$course->id}}</td>
        <td>{{$course->coursename}}</td>
       
        <td>
          <a href="course/add/{{ $course->id }}" class="btn-secondary">Add</a>

         
           
        
        </td>
        @endforeach
        
        
        
       
        <td> 
          

@endsection 