<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <main class="form-signin d-flex justify-content-center align-items-center text-center" style="height: 100vh !important">
        <form method="POST">
            @csrf
          <h1 class="fw-bold">
            ETax Dashboard
          </h1>
          <h1 class="h3 mb-3 fw-normal">Provide details to create an account</h1>
      
          <div class="form-floating mb-3">
            <input name="name" type="name" class="form-control" id="floatingName" placeholder="name@example.com">
            <label for="floatingName">Name</label>
          </div>
          <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
            <label for="floatingEmail">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input name="phone" type="phone" class="form-control" id="floatingEmail" placeholder="0333xxxxxxx">
            <label for="floatingPhone">Phone</label>
          </div>
          <div class="form-floating mb-3">
            <input name="cnic" type="cnic" class="form-control" id="floatingCnic" placeholder="37405xxxxxxxx">
            <label for="floatingCnic">CNIC</label>
          </div>
          <div class="form-floating mb-2">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <p>This is an admin account creator the user will have admin privileges</p>

      
          @if (session()->has('error'))
            <div id="alert" class="alert alert-primary" role="alert">
                {{ session('error') }}
            </div>
          @endif
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          <a class="mt-3 d-block" href="/admin/login">Log in</a>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        setTimeout(() => {
          const alert = document.getElementById('alert');
          alert.style.display = 'none';
        }, 5000);
    </script>
</body>
</html>