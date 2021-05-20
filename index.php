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

    <title>Basic Banking System</title>
    <style>
    body,html{
    	height:100%;
    	margin:0;
    }	


.bg{
    	
 
  background-image: url("bank.png");

 
  height: 50%;
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
   
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>MEGA BANK</h1>
                </div>
              </div>
              
               <div class="bg">
                
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="user.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button type="button" class="btn btn-primary" style="margin-top:8px">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button type="button" class="btn btn-primary" style="margin-top:22px">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button type="button" class="btn btn-primary" style="margin-top:8px">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Akshay Rane</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
