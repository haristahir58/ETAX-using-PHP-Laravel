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
          <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      
          <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating my-2">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
      
          @if (session()->has('error'))
            <div id="alert" class="alert alert-primary" role="alert">
                {{ session('error') }}
            </div>
          @endif
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          <a class="d-block mt-3" href="/admin/signup">Create an account.</a>
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