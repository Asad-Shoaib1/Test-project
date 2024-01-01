{{-- <x-app-layout> --}}
     
    <!doctype html>
    <html lang="en">
      <base href="/">
      <head>
          <title>Sidebar 03</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
            
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="../sidebar/css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      </head>
      <body>
            <div class="wrapper d-flex align-items-stretch">
                <nav id="sidebar" class="active">
                    <div class="custom-menu">
                        <button type="button" id="sidebarCollapse" class="btn btn-primary">
                  <i class="fa fa-bars"></i>
                  <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
                    <div class="p-4">
                      <h1><a href="index.html" class="logo">{{Auth::user()->name}} </a></h1>
                <ul class="list-unstyled components mb-5">
                <li class="active">
                       <a href="{{route('student.show')}}"><span class="fa fa-home mr-3"></span> Students List</a> 
                  </li>
                  <li class="active">
                @can('isAdmin')      <a href="{{route('create.student')}}"><span class="fa fa-user mr-3"></span> Add Students</a> @endcan
                  </li>
                  <li>
                    <a href="{{route('profile')}}"><span class="fa fa-briefcase mr-3"></span> My Profile</a>
                    </li>
                  <li>
                @can('isAdmin')  <a href="{{route('create.course')}}"><span class="fa fa-briefcase mr-3"></span> Add Course</a> @endcan
                  </li>
                  @auth
    @php
        $userId = auth()->id(); // Retrieve the ID of the authenticated user
    @endphp

    <!-- Sidebar link using the user's ID -->
    <li>
        <a href="course/view/{{ $userId }}">
            <span class="fa fa-sticky-note mr-3"></span> My Courses
        </a>
    </li>
@endauth
                  <li>
                    <a href="{{route('allcourses')}}"><span class="fa fa-sticky-note mr-3"></span> All Course</a>
                    </li>
                  <li>
                  <a href="{{route('logout')}}"><span class="fa fa-paper-plane mr-3"></span> Log out</a>
                  </li>
                </ul>
    
                <div class="mb-5">
                            
                    <div class="form-group d-flex">
                        
                  </form>
                        </div>
    
              </div>
            </nav>
           
            <!-- Page Content  -->
          <div id="content" class="p-4 p-md-5 pt-5">
        <div>
           
            <h2 class="mb-4"> 
              {{-- <x-app-layout>
              </x-app-layout>    --}}
            </h2>
            <p>
              @yield('dashboard')
            
              @yield('createstudent')
            @yield('student-data')
            @yield('profile')
            @yield('edit-students')
            @yield('course')
            @yield('edit-course')
            @yield('my-course')
            @yield('allcourses')
            @yield('add-newcourse')
            </p>
          </div>
            </div>
    
        <script src="../sidebar/js/jquery.min.js"></script>
        <script src="../sidebar/js/popper.js"></script>
        <script src="../sidebar/js/bootstrap.min.js"></script>
        <script src="../sidebar/js/main.js"></script>

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
          

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      </body>
    </html>
   

