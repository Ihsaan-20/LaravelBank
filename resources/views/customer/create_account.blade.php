<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="conatiner">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <h1>Create new account</h1>
                    <div class="card-body">
                        <form method="POST" action="{{url('/customer/store-account')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Account Type</label>
                                <select class="form-select" name="account_type" id="account_type">
                                    <option selected>Select one</option>
                                    <option value="saving">Saving</option>
                                    <option value="default">Default</option>
                                    <option value="current">Current</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" id="password" placeholder="Enter your email" class="form-control">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Create account</button>
                            </div>
                            <a href="{{url('/customer/login')}}">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>