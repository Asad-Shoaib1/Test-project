@extends('layouts.sidebar')
@section('createstudent')
<form action = "{{route('students.add')}}" method ="POST" >
    @csrf
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">First name</label>
        <input type="text" class="form-control" name ="name" id="validationCustom01" placeholder="First name" value="" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Last name</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustomUsername">email</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
          </div>
          <input type="text" class="form-control"  name = "email" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom03">phone</label>
        <input type="text" class="form-control" name="phoneno" id="validationCustom03" placeholder="City" required>
        <div class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom04">adress</label>
        <input type="text" class="form-control" name="address" id="validationCustom04" placeholder="State" required>
        <div class="invalid-feedback">
          Please provide a valid state.
        </div>
      </div>
     
    </div>
    <div class="form-group mb-0">
      <label for="exampleInputText2" class="h5">Subjects</label>
      <select name="coursename" multiple="multiple" class="selectpicker form-control" data-style="py-0">
          @foreach($course as $courses) 
              <option value="{{$courses->coursename}}">{{$courses->coursename}}</option> 
          @endforeach
      </select>
  </div>
  
              
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit </button>
  
    
    
    
    
  </form>

@endsection