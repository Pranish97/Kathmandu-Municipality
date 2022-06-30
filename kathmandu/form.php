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
  <body>
    <?php include'inside/header.php' ?>
    <?php include'inside/dbconnect.php' ?>
    <?php
      $showalert=false;
      $method=$_SERVER['REQUEST_METHOD'];
      if($method=='POST'){
        $first=$_POST['first'];
        $last=$_POST['last'];
        $username=$_POST['username'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zip=$_POST['zip'];
        $dob=$_POST['dob'];
        $sql="INSERT INTO `employee` (`First_name`, `Last_name`, `Username`, `City`, `State`, `Zip`, `Date_of_birth`) VALUES ( '$first', '$last', '$username', '$city', '$state', '$zip', '$dob')";
        $result=mysqli_query($conn,$sql);
        $showalert=true;

        if($showalert){
           echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You have successfully submitted your information.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';


        }


      }


    ?>
    <div class="container mt-5" style="border:1px solid black; border-radius: 10px; height: 500px;">
      <h2 class="text-center mt-3">Employee Form</h2>
      <form class="row g-3" action="/kathmandu/form.php" method="post">
  <div class="col-md-4 mt-5">
    <label for="validationDefault01" class="form-label"><b>First name</b></label>
    <input type="text" class="form-control" id="first" name="first" required>
  </div>
  <div class="col-md-4 mt-5">
    <label for="validationDefault02" class="form-label"><b>Last name</b></label>
    <input type="text" class="form-control" id="last" name="last" required>
  </div>
  <div class="col-md-4 mt-5">
    <label for="validationDefaultUsername" class="form-label"><b>Username</b></label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="username" name="username"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label"><b>City</b></label>
    <input type="text" class="form-control" id="city" name="city" required>
  </div>
  <div class="col-md-3 ">
    <label for="validationDefault04" class="form-label"><b>State</b></label>
    <select class="form-select" id="state" name="state" required>
      <option selected disabled value="">Choose</option>
      <option>Biratnagar</option>
      <option>Janakpur</option>
      <option>Hetauda</option>
      <option>Pokhara</option>
      <option>Deukhuri</option>
      <option>Birendranagar</option>
      <option>Godawari</option>

    </select>
  </div>
  
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label"><b>Zip</b></label>
    <input type="number" class="form-control" id="zip" name="zip" required>
  </div>
  <div class="col-md-12" >
    <label for="validationDefault03" class="form-label"><b>Date of Birth</b></label>
    <div class="dob col-md-4 " >
    <input type="date" class="form-control" id="dob" name="dob"  
    required>
  </div>
</div>


  
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
    </div>
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