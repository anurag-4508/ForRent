<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>For Rent : Single Rooms</title>

  <link rel="stylesheet" href="/rent project/css/studentroom.css">
</head>

<body class="text-primary bg-light">

  <!-- navbar -->

  <!-- navbar -->
  <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/rent project/index.php">For Rent Service</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/rent project/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/rent project/about.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              More...
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/rent project/payrent.php">Pay Rent</a></li>
              <li><a class="dropdown-item" href="/rent project/dreceipt.php">Download Receipt</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Register Physical Visit</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/rent project/contact.php">Contact Us</a>
          </li>

        </ul>
        <form class="d-flex">
          <!-- <button type="button" class="btn btn-primary">Login</button>
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
          <!-- <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal" >Owner Login</button> -->
          <a href="/rent project/booknow.php" class="btn btn-primary mx-4">Book Now</a>
          <a href="/rent project/rent management/login.php" class="btn btn-outline-primary">Owner Login</a>
        </form>
      </div>
    </div>
  </nav>



  <div class="container my-4">

    <div class="alert alert-primary my-4" role="alert">
      Let's have a look at Student-cum-Single person Room
    </div>


    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">



      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/rent project/other/img (7).jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="fw-bold" class="text-primary">Porch Area for Parking</h5>
              <!-- <p>It makes you comfortable from within.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="/rent project/other/img (9).jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="fw-bold">24x7 CCTV survillence</h5>
              <!-- <p>You will always be in touch with environment.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="/rent project/other/img (4).jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block ">
              <h5 class="fw-bold">Green Environment</h5>
              <!-- <p>Hassel free and secure parking facilites provided.</p> -->
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="row p-4 d-flex flex-column position-static">

        <h3 class="mb-0"><u><b>
              Facilites Provided
            </b></u></h3>

        <br>
        <p class="card-text mb-auto">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Facilites</th>
              <th scope="col">Description</th>
              <!-- <th scope="col">Handle</th> -->
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Single room</td>
              <td>It Provides enough space for student. It has kitchen attached</td>
              <!-- <td>@mdo</td> -->
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>24-hrs Running water</td>
              <td>Since we have tube-well so no worry of water crisics</td>
              <!-- <td>@fat</td> -->
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Greenery all around</td>
              <td>Our house I attached to field, due to which we have fresh, pollution free
                environment</td>
              <!-- <td>@fat</td> -->
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Proper Security Measures</td>
              <td>We have 24x7 CCTV survillence. No risk about Security</td>
              <!-- <td>@fat</td> -->
            </tr>

            <tr>
              <th scope="row">5</th>
              <td>Enough Parking Space</td>
              <td>We have especially designed parking area or porch for this purpose</td>
              <!-- <td>@fat</td> -->
            </tr>


          </tbody>

        </table>


        </p>
      </div>


      <!-- rent details -->
      <div class="row p-4 d-flex flex-column position-static">

        <h3 class="mb-0"><u><b>
              Rent Details
            </b></u></h3>

        <br>
        <p class="card-text mb-auto">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Amount</th>
              <th scope="col">Description</th>
              <!-- <th scope="col">Handle</th> -->
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>₹2500</td>
              <td>Room rent price per month</td>
              <!-- <td>@mdo</td> -->
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>₹500</td>
              <td>It includes water and maintenance cost per month</td>
              <!-- <td>@fat</td> -->
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>₹0</td>
              <td>For safe, green and secure healthy environment😃</td>
              <!-- <td>@fat</td> -->
            </tr>
            <tr>
              <th scope="row">Total</th>
              <td>₹3000</td>
              <td>SubTotal per month</td>
              <!-- <td>@fat</td> -->
            </tr>


          </tbody>

        </table>
        <br><br>
        <div class="container">
          <div class="row">
            <div class="col">
              <!-- <button type="button" class="btn btn-primary">Book Now</button> -->
              <a href="/rent project/booknow.php" class="btn btn-primary">Book Now</a>

            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
          </div>
        </div>
        <br><br><br>
        <p>Note : Adavance rent of 1 month has to be submitted while booking </p>
        </p>
      </div>






    </div>
  </div>



  <!-- Modal -->
  <!-- <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> -->







  <!-- Bottom to Top scroller -->
  <!-- <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out"
        data-abc="true"><img class="bd-placeholder-img" width="25" height="25" src="arrow.png" alt="" srcset=""></a> -->

  <!-- Footer -->

  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top ">
    <p class="col-md-4 mb-0 text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;© 2021 For rent services, Inc</p>

    <a href="/"
      class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32">
        <use xlink:href="#bootstrap"></use>
      </svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="/rent project/index.php" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="/rent project/about.php" class="nav-link px-2 text-muted">About</a></li>
      <li class="nav-item"><a href="/rent project/contact.php" class="nav-link px-2 text-muted">Contact Us</a></li>
    </ul>
  </footer>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>