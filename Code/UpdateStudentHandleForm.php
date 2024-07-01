
<?php include_once "session.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AMA | UPDATE </title>
  <script src="assets/UpdateStudentFile/UpdateBackButtonRedirection.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="assets/UpdateStudentFile/UpdateStudentHandleMessage.js"></script>
  <link rel="icon" href="Image/Logo.png" type="image/x-icon">
  <style>
     .Swal-title{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 1.4em;
      color: #575656;
      margin-top:10px;
    }
    .swal2-title{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 1.8em;
      color: #575656;
      margin-top: 10px;
    }
  </style>
 
</head>

<body>
</body>

</html>
  <?php

    include_once 'connection.php';
    if(isset($_POST['year'],$_POST['idno'],$_POST['lastname'],$_POST['firstname'],$_POST['middlename'],$_POST['sem'],$_POST['contact'],$_POST['yearlevel'],$_POST['section'])){
      $id=$_GET['idno'];
      $year = $_POST['year'];
      $idno= $_POST['idno'];
      $lastname = $_POST['lastname'];
      $firstname = $_POST['firstname'];
      $middlename = $_POST['middlename'];
      $sem = $_POST['sem'];
      $contact = $_POST['contact'];
      $yearlevel = $_POST['yearlevel'];
      $section = $_POST['section'];
    
  
      if($id == $idno){
        // condition if the id is not changed
        include_once 'connection.php';
        $insert=mysqli_query($conn,"UPDATE student SET SchoolYear='$year',IDNo='$idno',LastName='$lastname',FirstName='$firstname',MiddleName='$middlename',Semester='$sem',ContactNo='$contact',YearLevel='$yearlevel',Section='$section' WHERE IDNo='$id'
        ");

        // check if the query is added
          if($insert){
            echo "<script>UpdateStudentMessage();</script>";
          }else{
            echo "<script>failedAdded();</script>";
            // This use to print the error message if the insert not done correctly - echo "Failed".mysqli_error($conn);
          }

      }elseif($id != $idno){
        // condition if the id is change
        $query= mysqli_query($conn,"SELECT IDNo FROM student WHERE EXISTS (SELECT IDNo FROM student WHERE IDNo='$idno') ");
        $result=mysqli_fetch_assoc($query);

        if($result){
          echo "<script>duplicateID();</script>";
        }else{
          include_once 'connection.php';
          $insert=mysqli_query($conn,"UPDATE student SET SchoolYear='$year',IDNo='$idno',LastName='$lastname',FirstName='$firstname',MiddleName='$middlename',Semester='$sem',ContactNo='$contact',YearLevel='$yearlevel',Section='$section' WHERE IDNo='$id'
          ");
  
          // check if the query is added
            if($insert){
              echo "<script>UpdateStudentMessage();</script>";
            }else{
              echo "<script>failedAdded();</script>";
            }
        }
      }
     
    }else{
      echo "Failed no value set";
    }
  $conn->close();

// error pa , dapat mo balik ra gihapon sa form na update na jaoy value.
