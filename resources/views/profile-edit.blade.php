@extends('layouts.sidebar')
@section('createstudent')
    <form action = "/profile/edit/{{$user->id}}" method ="POST">
        @csrf
       

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">First name</label>
                <input type="text" class="form-control" name ="name" id="validationCustom01" placeholder="First name"
                    value="{{$user->name}}" required>
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
                    <input type="text" class="form-control" name = "email" id="validationCustomUsername"
                        placeholder="Username" aria-describedby="inputGroupPrepend" required value="{{$user->email}}">
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom03">phone</label>
                <input type="text" class="form-control" name="phoneno" id="validationCustom03" placeholder="City"
                    required value="{{$user->phoneno}}">
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            

        </div>
        
                    
                </div>
                <button class="btn btn-primary" type="submit">Submit </button>
            </div>
          
        </div>
       





    </form>
@endsection
