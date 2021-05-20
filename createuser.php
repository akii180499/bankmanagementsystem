<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>


<?php
  include 'navbar.php';
?>
      
 
        <h2 class="text-center pt-4">Create a User</h2>
              <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="userimage.jpg" style="border: none; border-radius: 50%;">
        </div>
 
        <br>
        <form class="app-form" method="post">
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control"  placeholder="Enter Email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputBalance1">Balance</label>
    <input type="number" class="form-control"  placeholder="Enter Balance" name="balance">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</br>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="INSERT INTO `usertable`(`name`, `email`, `balance`) VALUES ('$name','$email','$balance')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>
















