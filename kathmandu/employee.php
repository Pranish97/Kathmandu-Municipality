<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php include 'inside/header.php';?>
    <?php include 'inside/dbconnect.php';?>
     <div class="container mt-5">
      <h3 >Employees</h3><br>


    <table class="table" id="myTable">
      <thead >
        <tr>
          <th scope="col">Photo</th>
          <th scope="col">Name</th>
          <th scope="col">Designation</th>
          <th scope="col">Phone Number</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `elected`";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){
            $sno=$row['SNO'];

            echo "<tr>
            <th scope='row'><img src='card$sno.png' width=120 height=100></th>
            <td class='pt-5'>". $row['Name'] . "</td>
            <td class='pt-5'>". $row['Designation'] . "</td>
            <td class='pt-5'> ". $row['Phone_number'] . " </td>
          </tr>";
        } 
          ?>
</tbody>
</table>
</div>
<?php include 'inside/footer.php'?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>