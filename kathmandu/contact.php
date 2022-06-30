<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style >
    .form{
      float: left;
    }
    .contact{
      float: left;


    }
    .contact h2{
      margin: 120px 0 0 270px;
    }
    .contact p{
      padding: 15px;
      text-align: center;
      font-size: 20px;
      margin: 0 0 0 150px;
    }

  </style>
  <body>
    <?php include 'inside/header.php'; ?>
    <?php include 'inside/dbconnect.php'; ?>
    <?php
      $showalert=false;
      $method=$_SERVER['REQUEST_METHOD'];
      if($method=='POST'){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['desc'];
        $sql="INSERT INTO `contact` ( `Name`, `Email`, `Message`, `timestamp`) VALUES ( '$name', '$email', '$message', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        $showalert=true;
     
       

      

    if($showalert){
        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You have successfully send your contact information.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  }?>
    
    <div class="container mt-5" >
    <form class="form  mt-3 border border-dark rounded-3 p-4 w-50" action="contact.php" method="post">
      <h2 class="text-center">Contact Form</h2>
      <div class="mb-3 ">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="name" class="form-control" id="name" name="name" >
</div>

    <div class="mb-3 ">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
  <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
</div>
<div class="mb-3 ">
    <button type="submit" class="btn btn-primary">Send</button>
  </div>
</form>
<div class="contact w-50 ">
  <h2 class="text-right p-3 ">Contact Us</h2>
  <p>Email Us with any Question or you can call +977 423423.We would be happy to answer your question.</p>
</div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br>

<?php include 'inside/footer.php'?>
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