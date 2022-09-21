<?php
$result =false;
$showError = false;
$showSelectError = false;
$showalert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $firstname = $_POST["firstname"];
    $secondname = $_POST["secondname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $select = $_POST["select"];
    $address = $_POST["address"];


    if ($select == "Open this select menu") {
        $showSelectError = true;
    } else {
        $sql = "INSERT INTO `book` (`firstname`, `secondname`, `phone`, `email`, `selectRoomType`, `Address`, `dt`) VALUES ('$firstname', '$secondname', '$phone', '$email', '$select', '$address', current_timestamp());";
        $result = mysqli_query($conn, $sql);

        if ($result == true) {
            $showalert = true;
        } else {

            $showError = true;
        }
    }
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



    <title>For Rent : Book</title>
    <link rel="stylesheet" href="/rent project/css/booknow.css">
</head>

<body>

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
                        <a class="nav-link active" aria-current="page" href="/rent project/index.php">Home</a>
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
                    <!-- <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Owner Login</button> -->
                    <a href="/rent project/booknow.php" class="btn btn-primary mx-4">Book Now</a>
                    <a href="/rent project/rent management/login.php" class="btn btn-outline-primary">Owner Login</a>
                </form>
            </div>
        </div>
    </nav>


    <!-- book now form -->
    <div class="intro">


        <?php

        if ($result == false) {
            echo '<div class="alert alert-primary my-4" role="alert">
            Please fill this form.&nbsp; We will contact you as soon as possible.
            </div>';
        }
        if ($showSelectError == true) {
            echo '<div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
        <strong>Error!</strong> Please select room type.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        if ($showalert == true) {
            echo '<div class="alert alert-warning alert-dismissible fade show my-4" role="alert">
       <strong>Success!</strong> Your details are with us. We will contact you soon.
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        if ($showError == true) {
            echo '<div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
        <strong>Oh!</strong> Some error occured.Please try again later.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
        }

        ?>



    </div>





    <div class="container my-2">

        <form action="/rent project/booknow.php" method="post">
            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text">First and last name</span>
                    <input type="text" aria-label="First name" id="firstname" name="firstname" class="form-control">
                    <input type="text" aria-label="Last name" id="secondname" name="secondname" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputPhone" class="form-label">Contact No.</label>
                <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Select Room Type</label>
                <select class="form-select" id="select" name="select" aria-label="Default select example">
                    <option value="Open this select menu" selected>Open this select menu</option>
                    <option value="Family Room">Family Room</option>
                    <option value="Student-Cum-Single Person Room">Student-Cum-Single Person Room</option>
                    <!-- <option value="3">Other</option> -->
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>

        </form>

    </div>





    <!-- Modal -->
    <div class="modal fade" id="success" tabindex="-1" aria-labelledby="successLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pre-Book Request Submitted</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your booking has been submitted. We will get in touch with you in few days.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>




    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Bottom to Top scroller -->
    <!-- <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out"
        data-abc="true"><img class="bd-placeholder-img" width="25" height="25" src="arrow.png" alt="" srcset=""></a> -->

    <!-- Footer -->

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
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