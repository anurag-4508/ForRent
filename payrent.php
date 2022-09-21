<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>For Rent : Pay Rent</title>

  <link rel="stylesheet" href="/rent project/css/payrent.css">
</head>

<body class="text-primary bg-light">

  <!-- navbar -->

  <!-- navbar -->
  <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/rent project/index.php">For Rent Service</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/rent project/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/rent project/about.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More...
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item active" href="/rent project/payrent.php">Pay Rent</a></li>
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
          <!-- <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Owner Login</button> -->
          <a href="/rent project/booknow.php" class="btn btn-primary mx-4">Book Now</a>
          <a href="/rent project/rent management/login.php" class="btn btn-outline-primary">Owner Login</a>
        </form>
      </div>
    </div>
  </nav>





  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">


    <main class="px-3">
      <!-- <h1>Pay using below following methods</h1> -->

      <div class="alert alert-primary my-4" role="alert">
        <h5>Pay using below following methods</h5>
      </div>


      <!-- drop down -->
      <div class="items">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Using UPI Id #1
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <!-- <strong class="d-inline-block mb-2 text-primary">World</strong> -->
                    <h3 class="mb-0">Pay to below UPI Id</h3>
                    <!-- <div class="mb-1 text-muted">Nov 12</div> -->
                    <br>
                    <p class="card-text mb-auto"><b>UPI ID:&nbsp;&nbsp;</b><u>anuragmandloi30@oksbi</u></p>
                    <p class="card-text mb-auto">Once payment is done, send payment receipt to
                      <u>anuragmandloi30@gmail.com</u>&nbsp;email address.<br>
                      Once payment is settled, you can download payment receipt within 1-2 days of payment from our
                      Website
                    </p>
                    <!-- <a href="#" class="stretched-link">Continue reading</a> -->

                  </div>
                  <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="300" height="250" src="/rent project/other/upi.jpg" alt="family room" srcset="">
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Using Bank Account details #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Pay to below account</h3>

                    <br>
                    <p class="card-text mb-auto"><b>Account number:&nbsp;&nbsp;</b><u>1234523210</u><br>
                      <b>IFSC Code:&nbsp;&nbsp;</b><u>SBIN001234</u><br>
                      <b>Bank name:&nbsp;&nbsp;</b><u>State bank of India</u><br>
                      <b>Benificery's name:&nbsp;&nbsp;</b><u>Yogendra Mandloi</u><br><br>
                    </p>
                    <p class="card-text mb-auto">Once payment is done, send payment receipt to
                      <u>anuragmandloi30@gmail.com</u>&nbsp;email address.<br>
                      Once payment is settled, you can download payment receipt within 1-2 days of payment from our
                      Website
                    </p>


                  </div>
                  <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="400" height="250" src="/rent project/other/ib.jpg" alt="student room" srcset="">
                  </div>
                </div>

              </div>
            </div>
          </div>


          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Using QR Code #3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Scan QR Code</h3>

                    <br>
                    <p class="card-text mb-auto">Scan QR code shown in right banner image from any valid UPI application
                      such as Google pay, Phonepay, Paytm etc
                      to pay the rent.
                    </p>
                    <p class="card-text mb-auto">QR Code should have following details<br>
                      <b>UPI Id associated:&nbsp;&nbsp;</b><u>anuragmandloi30@oksbi</u><br>
                    </p>
                    <p class="card-text mb-auto">Once payment is done, send payment receipt to
                      <u>anuragmandloi30@gmail.com</u>&nbsp;email address.<br>
                      Once payment is settled, you can download payment receipt within 1-2 days of payment from our
                      Website
                    </p>

                  </div>
                  <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="300" height="250" src="/rent project/other/qr.jpeg" alt="student room" srcset="">
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>


      </div>


    </main>


  </div>












  <!-- Bottom to Top scroller -->
  <!-- <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out"
        data-abc="true"><img class="bd-placeholder-img" width="25" height="25" src="arrow.png" alt="" srcset=""></a> -->

  <!-- Footer -->
  <div class="container" id="footer">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" >
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




  </div>



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