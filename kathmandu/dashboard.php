<?php  


$update = false;
$delete = false;
// Connect to the Database 
include'inside/dbconnect.php';


if(isset($_GET['delete'])){
  $sno=$_GET['delete'];
  $delete=true;
  $sql="DELETE FROM `employee` WHERE `sno`= $sno";
  $result=mysqli_query($conn,$sql);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset( $_POST['snoEdit'])){
  // Update the record
    $sno = $_POST["snoEdit"];
    $fname = $_POST["firstEdit"];
    $lname = $_POST["lastEdit"];
    $Username = $_POST["usernameEdit"];
    $City = $_POST["cityEdit"];
    $State = $_POST["stateEdit"];
    $Zip = $_POST["zipEdit"];
    $dob = $_POST["dobEdit"];
  

  // Sql query to be executed
  $sql = "UPDATE `employee` SET `First_name` = '$fname', `Last_name` = '$lname', `Username` = '$Username', `City` = '$City', `State` = '$State', `Zip` = '$Zip', `Date_of_birth` = '$dob' WHERE `employee`.`SNO` = $sno";
  $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
}
else{
    echo "We could not update the record successfully";
}
}
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <title>Dashboard</title>

</head>

<body>


  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this Record</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="dashboard.php" method="post">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="row">
            <div class="col-md-4">
    <label for="validationDefault01" class="form-label"><b>First name</b></label>
    <input type="text" class="form-control" id="firstEdit" name="firstEdit" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label"><b>Last name</b></label>
    <input type="text" class="form-control" id="lastEdit" name="lastEdit" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label"><b>Username</b></label>
    <div class="input-group">
    
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="usernameEdit" name="usernameEdit"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationDefault03" class="form-label"><b>City</b></label>
    <input type="text" class="form-control" id="cityEdit" name="cityEdit" required>
  </div>
  <div class="col-md-4 " >
    <label for="validationDefault04" class="form-label"><b>State</b></label>
    <select class="form-select " style="height:35px" id="stateEdit" name="stateEdit" required>
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
            <div class="col-md-4">
    <label for="validationDefault05" class="form-label"><b>Zip</b></label>
    <input type="number" class="form-control" id="zipEdit" name="zipEdit" required>
  </div>

  <div class="col-md-12" >
    <label for="validationDefault03" class="form-label"><b>Date of Birth</b></label>
    <div class="dob col-md-4 " >
    <input type="date" class="form-control" id="dobEdit" name="dobEdit"  
    required>
  </div>
</div>
</div>


          </div>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
         
  

      </div>

    </div>
  </div>
 <?php include'inside/header1.php';?>

<?php  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your have logged in successfully.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  ?>

 
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your record has been updated successfully.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your record has been deleted successfully.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  
 

  <div class="container my-4">
    <h2 class="text-center">Employee Dashboard</h2>


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Username</th>
          <th scope="col">City</th>
          <th scope="col">State</th>
          <th scope="col">Zip</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `employee`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['First_name'] . "</td>
            <td>". $row['Last_name'] . "</td>
            <td>". $row['Username'] . "</td>
            <td>". $row['City'] . "</td>
            <td>". $row['State'] . "</td>
            <td>". $row['Zip'] . "</td>
            <td>". $row['Date_of_birth'] . "</td>
            <td> <button class='edit btn btn-sm btn-primary' id=".$row['SNO'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['SNO'].">Delete</button>  </td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>
  </div>
  <hr>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        first_name = tr.getElementsByTagName("td")[0].innerText;
        last_name = tr.getElementsByTagName("td")[1].innerText;
        Username = tr.getElementsByTagName("td")[2].innerText;
        City = tr.getElementsByTagName("td")[3].innerText;
        State = tr.getElementsByTagName("td")[4].innerText;
        Zip = tr.getElementsByTagName("td")[5].innerText;
        Date_of_birth = tr.getElementsByTagName("td")[6].innerText;
        console.log(first_name, last_name,Username,City,State,Zip,Date_of_birth);
        firstEdit.value = first_name;
        lastEdit.value = last_name;
        usernameEdit.value = Username;
        cityEdit.value = City;
        stateEdit.value = State;
        zipEdit.value = Zip;
        dobEdit.value = Date_of_birth;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        sno = e.target.id.substr(1,);
        if(confirm("Are you sure you want to delete this record?")){
          console.log("Yes");
          window.location=`dashboard.php?delete=${sno}`;
        }
        else{
          console.log("no");
        }      
      })
    })

  </script>
</body>

</html>