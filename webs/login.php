<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    <title>Login Page</title>
  </head>
  <body>
   
    <div class="container">
      <div class="row vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-7 col-lg-5">
          <div class="card shadow-lg">
            <div class="card-body">
              <h3 class="mb-5 mt-3 text-center text-primary">SIGN IN</h3>
              
              <form action="proses_login.php" method="post">
  
                <div class="mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
  
                <div class="mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
  
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember</label>
                </div>
  
                <div class="d-grid gap-2">
                  <button href="index.php" class="btn btn-primary" type="submit">Sign In</button>
                </div>  
  
                <p class="mt-5">New member? <a href="tambah.php" class="text-decoration-none">Create account</a></p>
  
              </form>
  
            </div>
          </div>
        </div>
      </div>
    </div>
 
  </body>
</html>