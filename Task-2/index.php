<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&display=swap" rel="stylesheet">
    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #377cb9;">
            <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid w-2 pt-2">
              </div>  
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>HBTU BANK</h1>
                  <h6>A Govt. of India Undertaking</h6>
                </div>
              </div>

            </div>

            <div>
              <h2 style="text-align: center; padding-top: 20px;" >Our Services</h2>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.png" class="img-fluid mt-3">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2f6397;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer1.png" class="img-fluid mt-3">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2f6397;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history1.png" class="img-fluid mt-3">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2f6397;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
            <p>&copy 2023. Made by <b>DIPESH MATE</b> <br> HBTU Sparks Foundation</p>
</footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>