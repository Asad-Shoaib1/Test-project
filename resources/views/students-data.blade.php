@extends('layouts.sidebar')
@section('student-data')
<table id="user-list-table" class="table table-striped dataTable mt-4" role="grid"
                     aria-describedby="user-list-page-info">
                     <thead>
                        <tr class="ligth">
                           <th>Profile</th>
                           <th>Name</th>
                           <th>Phone no</th>
                           <th>Email</th>
                           <th>Courses</th>
                           <th style="min-width: 100px">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                         @foreach($students as $student) 
                        <tr>
                           <td class="text-center"><img class="rounded img-fluid avatar-40"
                                 src="../assets/images/user/01.jpg" alt="profile"></td>
                           <td>{{$student->name}}</td>
                           <td>{{$student->phoneno}}</td>
                           <td>{{$student->email}}</td>  
                           <td>{{$student->coursename}}</td>
                           
                           
                         <td><span class="badge bg-primary">Active</span></td>
                         <td></td>
                           <td></td>
                           <td>
                           @can('isAdmin')  
                               <a href="student/edit/{{$student->id}}"  class = "btn-secondary"> Edit</a>
                              <a href="{{route('create.student')}}"  class = "btn-primary"> ADD</a>
                              <a href="delete/{{$student->id}}"  class = "btn-danger"> Delete</a>
                              @endcan
                             

                              @endforeach

@endsection