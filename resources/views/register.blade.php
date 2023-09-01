<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-4 mb-2 w-50">
      
      
        <div class="card">
          @include('alertMessage')

            <div class="card-header">
                <h3 class="text-center">User Register</h3>
                <a href="{{route('login')}}" class="btn btn-success">Login</a>
            </div>
            <div class="card-body">
               <form action="{{route('registerPost')}}" method="post">
               @csrf
                <div class="form-group">
                    <label for=""><b>Name</b> <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Enter Your Name" value="{{old('name')}}">
                    <span class="text-danger">
                        @error('name')
                            {{$message}}
                        @enderror
                    </span>
                  </div>

                  <div class="form-group">
                    <label for=""><b>Mobile Number</b><span class="text-danger">*</span></label>
                    <input type="number" name="mobile_number" id="" class="form-control" placeholder="Enter Mobile number" value="{{old('mobile_number')}}">
                    <span class="text-danger">
                        @error('mobile_number')
                            {{$message}}
                        @enderror
                    </span>
                  </div>

                  <div class="form-group">
                    <label for=""><b>Email</b><span class="text-danger">*</span></label>
                    <input type="email" name="email" id="" class="form-control" placeholder="Enter Email" value="{{old('email')}}">
                    <span class="text-danger">
                        @error('email')
                            {{$message}}
                        @enderror
                    </span>
                  </div>

                  <div class="form-group">
                    <label for=""><b>Password</b><span class="text-danger">*</span></label>
                    <input type="text" name="password" id="" class="form-control" placeholder="" aria-describedby="Enter password">
                    <span class="text-danger">
                        @error('password')
                            {{$message}}
                        @enderror
                    </span>
                  </div>

                  <div class="form-group">
                    <label for=""><b>Confirm Password</b><span class="text-danger">*</span></label>
                    <input type="text" name="confirm_password" id="" class="form-control" placeholder="Enter Confirm password">
                    <span class="text-danger">
                        @error('confirm_password')
                            {{$message}}
                        @enderror
                    </span>
                  </div>

                  <div class="form-group">
                    <label for=""><b>Address</b><span class="text-danger">*</span></label>
                   <textarea name="address" class="form-control" id="" cols="5" rows="10">{{old('address')}}</textarea>
                   <span class="text-danger">
                    @error('address')
                        {{$message}}
                    @enderror
                </span>
                  </div>
             
                  <input type="submit" class="btn btn-primary" value="Register">

               </form>
            </div>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
