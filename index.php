
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Belajar Bersama Kongkow IT">
  <meta name="author" content="Jufianto Henri">

  <title>Kongkow IT Pekanbaru</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Top navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <main role="main" class="container">
    <div class="card">
      <div class="card-header">
        Tambah Data
      </div>
      <div class="card-body">
        <div class="col-md-8">
          <form action="prosesUser.php?action=add" method="post">
            <div class="mb-3">
              <label for="email">Username</label>
              <input type="text" class="form-control" name="username" id="email" placeholder="">
            </div>

            <div class="mb-3">
              <label for="email">Email</span></label>
              <input type="text" class="form-control" id="email" name="email" placeholder="">
            </div>

            <div class="mb-3">
              <label for="address">Password</label>
              <input type="password" class="form-control" id="address" name="password" placeholder="" required="">
            </div>
          </div>
          <button class="btn btn-primary btn-lg btn-block" type="submit">Daftar</button>
        </form>
      </div>
    </div>
  </div>
</main>

    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/js/bootstrap.min.js"></script>
    </body>
    </html>
