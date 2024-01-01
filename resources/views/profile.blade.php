@extends('layouts.sidebar')
@section('profile')
<h1>my profile</h1>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<table class="table table-dark">
    
    <thead>
     
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Phone No</th>
        <th scope="col">email </th>
        
        
      </tr>
    </thead>
    <tbody>
        <tr>@foreach($users as $user)  
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->phoneno}}</td>
        <td>{{$user->email}}</td>
        <td>
            <a href="profile/edit/{{ $user->id }}" class = "btn-secondary"> Edit</a>
        
        </td>
        
        
        
        
       
        <td> 
          
        
         @endforeach 
        
      </tr>
      
    
    </tbody>
  </table>
@endsection