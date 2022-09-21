<!-- this php is for realtime room occupancy check -->
<?php
include 'partials/_dbconnect.php';
$db = $conn;
$tableName = "checkroom";
$columns = ['sno', 'roomtype', 'avail'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns)
{
  if (empty($db)) {
    $msg = "Database connection error";
  } elseif (empty($columns) || !is_array($columns)) {
    $msg = "columns Name must be defined in an indexed array";
  } elseif (empty($tableName)) {
    $msg = "Table Name is empty";
  } else {
    $columnName = implode(", ", $columns);
    $query = "SELECT " . $columnName . " FROM $tableName" . " ORDER BY sno DESC";
    $result = $db->query($query);
    if ($result == true) {
      if ($result->num_rows > 0) {
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $msg = $row;
      } else {
        $msg = "No Data Found";
      }
    } else {
      $msg = mysqli_error($db);
    }
  }
  return $msg;
}
?>






<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>For Rent Services</title>

  <link rel="stylesheet" href="/rent project/css/home.css">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/rent project/index.php">For Rent Service</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/rent project/about.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
          <!-- <button class="btn btn-outline-primary" >Owner Login</button> -->
          <a href="/rent project/booknow.php" class="btn btn-primary mx-4">Book Now</a>
          <a href="/rent project/rent management/login.php" class="btn btn-outline-primary">Owner Login</a>
        </form>
      </div>
    </div>
  </nav>


  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/rent project/other/img1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="fw-bold">Greenery All around</h5>
          <p>You will always be in touch with environment.</p>
        </div>
      </div>
      <div class="carousel-item ">
        <img src="/rent project/other/img (1).jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="fw-bold" class="text-primary">Luxurious Apartment</h5>
          <p>It makes you comfortable from within.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/rent project/other/img (3).jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="fw-bold">Greenery All around</h5>
          <p>You will always be in touch with environment.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/rent project/other/img (7).jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block ">
          <h5 class="fw-bold">Vehicle Parking Facility</h5>
          <p>Hassel free and secure parking facilites provided.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="container my-4" id="roomsAvail">
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-15 fw-bold text-primary">Check Room Availability</h1>
        <p class="col-md-8 fs-6 ">We have rooms according to your need. We have family as well as student rooms, for
          sure
          of different prices.
          Please visit below links for more details.
        </p>
        <p>Please have a look at below table for room availabilty</p>
        <!-- Table which shows realtime data of room availiblity -->

        <div class="row">
          <div class="col-sm-8">
            <?php echo $deleteMsg ?? ''; ?>
            <div class="table-responsive">
              <table class="table  table-primary table-striped-primary">
                <thead>
                  <tr>
                    <th>S.N</th>
                    <th>Room type</th>
                    <th>Availability</th>
                </thead>
                <tbody>
                  <?php
                  if (is_array($fetchData)) {
                    $sn = 1;
                    foreach ($fetchData as $data) {
                  ?>
                      <tr>
                        <td><?php echo $sn; ?></td>
                        <td><?php echo $data['roomtype'] ?? ''; ?></td>
                        <td><?php echo $data['avail'] ?? ''; ?></td>
                      </tr>
                    <?php
                      $sn++;
                    }
                  } else { ?>
                    <tr>
                      <td colspan="8">
                        <?php echo $fetchData; ?>
                      </td>
                    <tr>
                    <?php
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>








  <!-- drop down -->
  <div class="items">
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Family Room's #1
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">

                <h3 class="mb-0">Family Rooms</h3>

                <br>
                <p class="card-text mb-auto">Family Rooms are specially designed for families. They are 1BHK rooms
                  suitable for 5-6 member family.</p>

                <a href="/rent project/familyroom.php" class="btn btn-primary">More info...</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" width="400" height="250" src="/rent project/other/fr.jpg" alt="family room" srcset="">
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Student Room's #2
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <!-- <strong class="d-inline-block mb-2 text-primary">World</strong> -->
                <h3 class="mb-0">Student Rooms</h3>
                <!-- <div class="mb-1 text-muted">Nov 12</div> -->
                <br>
                <p class="card-text mb-auto">These are small rooms made according to student needs. They can
                  comfortablly study in these rooms</p>
                <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                <a href="/rent project/studentroom.php" class="btn btn-primary">More info...</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" width="400" height="250" src="/rent project/other/sr.jpg" alt="student room" srcset="">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


  </div>





  <!-- Bottom to Top scroller -->
  <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"><img class="bd-placeholder-img" width="25" height="25" src="/rent project/other/arrow.png" alt="" srcset=""></a>

  <!-- Footer -->

  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top ">
    <p class="col-md-4 mb-0 text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;© 2021 For rent services, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>