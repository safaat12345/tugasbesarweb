<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Tampilan</title>

    <style>
      body {
          background-image: url(img/vava.jpg);
          background-repeat: no-repeat;
          background-size: cover;
          }
  </style>
  </head>
  <body>

<br> 
<br>
 <br>
 <br>
 <br>
 <br>

    <div class="row justify-content-center mt-4">
        <div class="btn btn-dark col-md-4">
    
            @if(session()->has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
    
              @if(session()->has('loginErorr'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginErorr') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
    
    
    
            <main class="form-signin">
                <table class="table">
                    <tr>
                        <th>
                            <h1 class="mb-3 fw-normal text-center text-success">LOGIN NOW</h1>
                        </th>  
                    </tr>
                    <tr>
                        <td>
                        </td>  
                    </tr>
                </table>
                <form action="/" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email')is-invalid @enderror" id="floatinginput" placeholder="Email address" name="email" autofocus required value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                        @enderror
                    </div><br>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingpassword" placeholder="Password" name="password" required>
                    </div>
    
                    <button class="w-50 btn btn-outline-info mt-2" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3"><a href="/register" class="text-danger">Register Now</a></small>
            </main>
    
        </div>
    </div>

    
    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>