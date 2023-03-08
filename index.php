
<?php
    include 'connection.php';
    // Initialize the session
    session_start();
    
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
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

    <title>FinXPlan</title>
  </head>
  <body>

    <div class="container">
        <div class="row top-buffer">
            <div class="col-sm-4">
                <h3>Selamat pagi,</h2>
                <h2><b><?= $row["name"]; ?></b></h1>
            </div>
            
            <div class="col-sm-8 d-flex justify-content-end align-items-center">
                <img src = "assets/userphoto.svg" width="25%" alt="Company Profile"/>
            </div>
        </div>
           
        <div class="row top-buffer">
            <div class="col d-flex justify-content-center">
                <div class="card rounded-xl" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title"><b>Savings</b></h5>
                      <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                      <p class="card-text"><span style="color:rgb(246, 93, 70); font-weight:bold;">RM <?= amountFormat($cur) ?></span></p>
                    </div>
                </div>
            </div>
        </div>    
        <div class="row top-buffer">
            <div class="col d-flex justify-content-end">
                <a href="companyprofile.php"><img src = "assets/cprofile.svg" alt="Company Profile"/></a>
            </div>
            <div class="col d-flex justify-content-start">
                <a href="savings.php"><img src = "assets/savings.svg" alt="Savings"/></a>

            </div>
        </div>
        <div class="row top-buffer">
            <div class="col d-flex justify-content-center">
                <a href="reminderbill.php"><img src = "assets/reminderbill.svg" alt="Company Profile" /></a>
            </div>
        </div>
        <div class="row top-buffer">
            <div class="col d-flex justify-content-center">
                <a href="actualsales.php"><img src = "assets/actualsales.svg" alt="Company Profile"/></a>
            </div>
        </div>
    </div>
    <br>
        

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

<!-- Ticket ID: JZA-LP2-GPTJ -->