@extends('layouts.sidebar')
@section('course')
<h1>ADD COURSES    
   
</h1> 
<button type="button" class="btn btn-primary" id="showFormBtn">Add</button> 

    

<form action="{{route('course.store')}}"  method="POST" id="myForm" >
    
   
    @csrf
    
                            
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    <input type="text" name="coursename" placeholder="Add Course Name" required>
    <button type="submit">Add</button> <br> <br>
    <h6>
        <span class="alert alert-success">{{Session::get('success')}}</span>   </h6>  <br>


</form>

   
 
<script>
document.getElementById('showFormBtn').addEventListener('click', function() {
    var form = document.getElementById('myForm');
    if (form.style.display === 'none') {
        form.style.display = 'inline';
    } else {
        form.style.display = 'none';
    }
});
</script>

<table class="table table-dark">
    
    <thead>
     
        <th scope="col">id</th>
        <th scope="col">Course Name</th>
        <th>Students with courses</th>
        
      </tr>
    </thead>
    <tbody>
        <tr>@foreach($course as $courses)  
      <tr>
        <th scope="row">{{$courses->id}}</th>
        <td>{{$courses->coursename}}</td>
       
        
      
       
        <td> <a href="course/edit/{{$courses->id}}"  class = "btn-secondary"> Edit</a>
            <a href="{{route('create.student')}}"  class = "btn-primary"> ADD</a>
            <a href="delete/{{$courses->id}}"  class = "btn-danger"> Delete</a></td>
        
         @endforeach 
        
      </tr>
      
    
    </tbody>
  </table>
  
@endsection