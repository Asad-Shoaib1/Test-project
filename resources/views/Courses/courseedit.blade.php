@extends('layouts.sidebar')
@section('edit-course')
<h1>Edit Course</h1>
<form action="{{"/course/edit/{{$user->id}}"}}" method="POST">
<div class="input-group mb-3">
    <input type="text" class="" placeholder="Enter Course Name" aria-label="Recipient's coursename" aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="submit">Update</button>
    </div>
  </div>
</form>
@endsection