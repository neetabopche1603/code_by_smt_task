<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body> 
    <div class="container mt-4">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
                </li>
              </ul>
              <span>{{auth()->user()->name}}</span>
              <a href="{{route('logout')}}" class="float-right btn-sm btn btn-success" onclick="return confirm('Are you sure logout this page')">Logout</a>
            </div>
          </nav>

          <div class="card mt-2">
          @include('alertMessage');
            <div class="card-body">
                <div class="table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userLists as $userList)
                            <tr>
                                <td scope="row">{{$userList->id}}</td>
                                <td>{{$userList->name}}</td>
                                <td>{{$userList->email}}</td>
                                <td>{{$userList->mobile_number}}</td>
                                <td>{{$userList->address}}</td>
                                <td>
                                 <a href="{{url('user-delete')}}/{{$userList->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you delete this record.!')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                          
                        </tbody>
                    </table>
                </div>
            </div>
          </div>

    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>