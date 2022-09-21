<?php
include_once 'FPDF/fpdf.php';


$result = false;
$showError = false;
$showSelectError = false;
$showalert = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $firstname = $_POST["firstname"];
    $secondname = $_POST["secondname"];
    $phone = $_POST["phone"];
    $year = $_POST["year"];
    $month = $_POST["month"];


    $sql = "SELECT * FROM receipt";
    $res = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($res);


    if ($year == "Select Year" || $month == "Select Month" || $phone == "") {
        $showSelectError = true;
    } else {

        while ($row = mysqli_fetch_assoc($res)) {


            if (strcasecmp($firstname, $row['firstname']) == 0 && strcasecmp($secondname, $row['secondname']) == 0 && strcasecmp($phone, $row['phone']) == 0) {

                // Cleans output for fpdf to open pdf file
                while (ob_get_level())
                    ob_end_clean();
                header("Content-Encoding: None", true);


                // $pdf = new FPDF();
                // $pdf->AliasNbPages();
                // $pdf->AddPage();
                // $pdf->SetFont("Arial", "B", 16);
                // $pdf->SetTextColor(0, 0, 0);
                // $pdf->Cell(200, 20, "Receipt", "0", "1", "C");

                // //table column
                // $pdf->SetLeftMargin(30);
                // $pdf->SetTextColor(0, 0, 0);
                // $pdf->SetTextColor(0, 0, 0);
                // $pdf->Cell(20, 10, "Sno", "1", "0", "C");
                // $pdf->Cell(40, 10, "First Name", "1", "0", "C");
                // $pdf->Cell(40, 10, "Last Name", "1", "0", "C");
                // $pdf->Cell(40, 10, "Phone", "1", "1", "C");
                // $pdf->SetFont("Arial", "B", 16);



                // $pdf->Cell(20, 10, $row['sno'], "1", "0", "C");
                // $pdf->Cell(40, 10, $row['firstname'], "1", "0", "C");
                // $pdf->Cell(40, 10, $row['secondname'], "1", "0", "C");
                // $pdf->Cell(40, 10, $row['phone'], "1", "1", "C");





                // $pdf->Output();
                // exit;
                date_default_timezone_set('Asia/Kolkata');
                $date = date('d-m-Y');
                $time = date('H:i:s');
                $Refrence_Code = rand(100000,999999);

                $pdf = new FPDF('L','mm',array(130,210));
                $pdf->AddPage();
                $pdf->SetFont('Arial', '', 12);
                $pdf->Cell(185,20,'Rent Receipt',0,1,'C');
                $pdf->Line(10, 30, 200, 30);
                $pdf->Ln(10);
                $pdf->Cell(55, 5, 'Reference Code', 0, 0);
                $pdf->Cell(58, 5, ': '.$Refrence_Code, 0, 0);
                $pdf->Cell(25, 5, 'Date ', 0, 0);
                $pdf->Cell(52, 5, ': '. $date, 0, 1);
                $pdf->Cell(55, 5, 'Amount', 0, 0);
                $pdf->Cell(58, 5, ': Rs 2674', 0, 0);
                $pdf->Cell(25, 5, 'Time', 0, 0);
                $pdf->Cell(52, 5, ': '.$time, 0, 1);
                $pdf->Cell(55, 5, 'Payment Status', 0, 0);
                $pdf->Cell(58, 5, ': Complete', 0, 1);
                
                $pdf->Line(10, 30, 200, 30);
                $pdf->Ln(10);
                $pdf->Cell(55, 5, 'Payment Mode', 0, 0);
                $pdf->Cell(58, 5, ': In hand', 0, 1);
                $pdf->Cell(55, 5, 'Paid By', 0, 0);
                $pdf->Cell(58, 5, ': '.$row['firstname'].' '.$row['secondname'], 0, 1);
                $pdf->Cell(55, 5, 'Payment for Month', 0, 0);
                $pdf->Cell(58, 5, ': '.$month.' '.$year, 0, 1);
                // $pdf->Cell(55, 5, 'Product Delivery Charge', 0, 0);
                // $pdf->Cell(58, 5, ': 0', 0, 1);
                $pdf->Line(10, 60, 200, 60);
                $pdf->Ln(10); //Line break
                // $pdf->Cell(140, 5, '', 0, 0);
                // $pdf->Line(10, 30, 200, 30);
                $pdf->Cell(55, 5, 'Authority Sign', 0, 0);
                $pdf->Image('other/signe.jpg',68,88);
                $pdf->Cell(58, 5, ':', 0, 1);
                // $pdf->Ln(5); //Line break
                // $pdf->Cell(50, 5, ': Signature', 0, 1, 'C');
                $file_name = "Receipt".$date.$time.".pdf";
                $pdf->Output($file_name,'D');


            }
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <script src="/rent project/js/dreceipt.js"></script>
    <title>For Rent : Receipt</title>
    <style>
        .container {
            /* background-color: rgb(223, 223, 223); */
            border-radius: 10px;
            padding: 15px;
        }

        .label {
            background-color: rgb(223, 223, 223);
            border-radius: 10px;
            padding: 15px;
        }
    </style>
</head>

<body>

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
                        <a class="nav-link" href="/rent project/about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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


    <?php

    if ($showSelectError == true) {
        echo '<div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
    <strong>Error!</strong> Please enter complete details.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($showalert == true) {
        echo '<div class="alert alert-primary alert-dismissible fade show my-4" role="alert">
   <strong>Success!</strong> Your details are with us.We will contact you soon.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($showError == true) {
        echo '<div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
    <strong>Error!</strong> No such person exist in database. Please try again.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
    }

    ?>

    <div class="container">
        <div class="alert alert-primary" role="alert">
            <h5 class="alert-heading">Download Rent Receipt</h5>
            <p>Please note:<br>
                1. Enter your name same as aadhar card<br>
                2. Please keep a copy of receipt with you as future refrence<br>
                3. In case any error occurs while downloading receipt, take a hard copy of receipt from us<br>
                4. Name entered below is case sensitive so please enter accordingly
            </p>
        </div>
    </div>

    <!-- form -->
    <div class="container">
        <div class="label">
            <form action="/rent project/dreceipt.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text">First and last name</span>
                    <input type="text" aria-label="First name" id="firstname" name="firstname" class="form-control">
                    <input type="text" aria-label="Last name" id="secondname" name="secondname" class="form-control">
                </div>
                <div class="mb-3">
                    <!-- <label for="exampleInputPhone" class="form-label">Contact No.</label> -->
                    <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" placeholder="Enter mobile number">

                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" id="year" name="year">
                        <option selected>Select Year</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" id="month" name="month">
                        <option selected>Select Month</option>
                        <option value="January">January</option>
                        <option value="Febuary">Febuary</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Download</button>
            </form>

        </div>

    </div>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- datepicker script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>