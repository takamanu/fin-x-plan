<?php
    include 'connection.php';
    $id = 1;
    $data = mysqli_query($conn, "SELECT * FROM company_profile WHERE id=$id");
    $row = mysqli_fetch_assoc($data);
    $cur = $row['assets'];
    
    function amountFormat(int $number, $separator = ".", $currency = "") {
        $decimal = substr($number, -3);
        $amount = substr($number, 0, -3) . $separator . $decimal . "," . "00";
        return $currency . $amount;
      }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">

    <title>Company Profile - FinXPlan</title>
  </head>
  <body>
    <div class="bg-oren rounded-nav">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <a href="index.php"><img src="assets/Back.svg" alt="Back"/></a>
                </div>
                <div class="col-sm-10">
                    <h2>Company Profile</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- <div class="row top-buffer">
            <div class="col bg-kuning">
                 <p>< Back</p>
            </div>
        </div>    -->
        <div class="row top-buffer">
            <div class="col d-flex justify-content-start">
                <p><b>Company Name</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-start">
                <p><?= $row["name"]; ?></p>
            </div>
        </div>
        <div class="row top-buffer">
            <div class="col d-flex justify-content-start">
                <p><b>Company Number</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-start">
                <p>C100-D-<?= $row["number"]; ?></p>
            </div>
        </div>     
        <div class="row top-buffer">
            <div class="col d-flex justify-content-start">
                <p><b>Location</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-start">
                <p><?= $row["location"]; ?></p>
            </div>
        </div> 
        <div class="row top-buffer">
            <div class="col d-flex justify-content-start">
                <p><b>Number of Employee</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-start">
                <p><?= $row["employee"]; ?></p>
            </div>
        </div>
        <div class="row top-buffer">
            <div class="col d-flex justify-content-start">
                <p><b>Current Assets</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-start">
                <p>RM <?= amountFormat($cur) ?></p>
            </div>
        </div> 
        <div class="row top-buffer">
            <div class="col d-flex justify-content-start">
                <a href="companyprofileupdate.php?id=<?= $row["id"] ?>"><button type="button" class="btn btn-warning rounded-xl">&nbsp;&nbsp;Edit&nbsp;&nbsp;</button></a>
            </div>
        </div>
        <br>

        <!-- <div class="row top-buffer">
            <div class="col d-flex justify-content-end">
                <img src = "cprofile.svg" alt="Company Profile" />
            </div>
            <div class="col d-flex justify-content-start">
                <img src = "savings.svg" alt="Company Profile"/>
            </div>
        </div>
        <div class="row top-buffer">
            <div class="col d-flex justify-content-center">
                <img src = "reminderbill.svg" alt="Company Profile" />
            </div>
        </div>
        <div class="row top-buffer">
            <div class="col d-flex justify-content-center">
                <img src = "actualsales.svg" alt="Company Profile"/>
            </div>
        </div>
    </div>     -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js\bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>