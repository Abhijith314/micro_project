<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <img class="logo" style="height: 50px;width: 90px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqxcYIqwYgcXCeraYAGLhhcLsyPHZqTt4Okw&s" style="height: 40px;" alt="logo">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Cart</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Items
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Vegetables</a></li>
                  <li><a class="dropdown-item" href="#">Fruits</a></li>
                  <li><a class="dropdown-item" href="#">Bakery</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>&nbsp;&nbsp;
            <button style="border-radius: 25px;background-color: rgb(9, 168, 20);size: 30px;">contact us</button>
          </div>
        </div>
      </nav>

      <div class="button" style="padding-left: 500px;padding-right: 500px;padding-top: 100px;">
        <a href="registration.html"><button type="button" class="btn btn-primary" style="border-radius: 35px;">Register</button></a>
        <a href="login.html"><button type="button" class="btn btn-primary" style="border-radius: 35px;">Login</button></a>
      </div>

      <br><br><br>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>