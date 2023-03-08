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

    <title>Actual Sales - FinXPlan</title>
  </head>
  <body>
    <form onsubmit="return false;" method="post">
        <input type="hidden" name="id" value="<?= $row["id"]; ?>">
        <div class="bg-coklat rounded-nav">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="actualsales.php"><img src="assets/backh.svg" alt="Back"/></a>
                    </div>
                    <div class="col-sm-10">
                        <h2 style="color: white;">Actual Sales</h2>
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
                    <p><b>Your Target</b></p>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-start input-group flex-nowrap">
                    <span class="input-group-text" id="basic-addon1">RM</span>
                    <input type="number" class="form-control" id="target" name="target" aria-describedby="basic-addon1" width="30px">
                </div>
            </div>     
            <div class="row top-buffer">
                <div class="col d-flex justify-content-start">
                    <p><b>Actual Sales</b></p>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-start input-group flex-nowrap">
                    <span class="input-group-text" id="basic-addon2">RM</span>
                    <input type="number" class="form-control" id="sales" name="sales" aria-describedby="basic-addon2">
                </div>
            </div> 
            <div class="row top-buffer">
                <div class="col d-flex justify-content-start">
                    <button type="submit" name="submit" onclick="actualSales()" class="btn btn-warning rounded-xl">&nbsp;&nbsp;Update&nbsp;&nbsp;</button>
                </div>
            </div>
            <div class="row top-buffer">
                <div class="col d-flex justify-content-start">
                    <p><b>Performance result</b></p>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-start">
                <p><div id="hasila"></div></p>
                </div>
            </div> 
            <br>
        </div>    
    </form>    

            <!-- <div class="row top-buffer">
                <div class="col d-flex justify-content-end">
                    <img src = "assets/cprofile.svg" alt="Company Profile" />
                </div>
                <div class="col d-flex justify-content-start">
                    <img src = "assets/savings.svg" alt="Company Profile"/>
                </div>
            </div>
            <div class="row top-buffer">
                <div class="col d-flex justify-content-center">
                    <img src = "assets/reminderbill.svg" alt="Company Profile" />
                </div>
            </div>
            <div class="row top-buffer">
                <div class="col d-flex justify-content-center">
                    <img src = "assets/actualsales.svg" alt="Company Profile"/>
                </div>
            </div>
        </div>     -->

    <!-- Optional JavaScript; choose one of the two! -->
    <script>

        function actualSales() {

            var target = document.getElementById("target").value;
            var sales = document.getElementById("sales").value;

            hasil = (target/sales)*100;
            document.getElementById('hasila').innerHTML = hasil + "%";
        }
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="js\bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>