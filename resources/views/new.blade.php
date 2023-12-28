@extends('layouts.sidebar')
@section('edit-students')
<form action = "/student/edit/{{$user->id}}" method ="POST" >
    @csrf
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">First name</label>
        <input type="text" class="form-control" name ="name" id="validationCustom01" placeholder="First name" value="{{$user->name}}" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
     
      <div class="col-md-4 mb-3">
        <label for="validationCustomUsername">Address</label>
        <div class="input-group">
          <div class="input-group-prepend">
          
          </div>
          <input type="text" class="form-control"  name = "address" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend"  value="{{$user->address}}">
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom03">phone</label>
        <input type="text" class="form-control" name="phoneno" id="validationCustom03" placeholder="City"     value="{{$user->phoneno}}">
        <div class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>
      
     
    </div>
   
    <button class="btn btn-primary" type="submit">Update</button>
  </form>

@endsection
