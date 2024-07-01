
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AMA | CREATE </title>
   <script src="assets/CreateStudentFile/CreateBackButtonRedirection.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="assets/CreateStudentFile/CreateHandleMessage.js"> </script>
   <link rel="icon" href="Image/Logo.png" type="image/x-icon">
  <!-- Dapat dili ni makita na page , dapat ang js file is ma move nako sya into different file  -->
  <style>
    .swal2-title{
      font-family: Arial, Helvetica, sans-serif;
      font-size:1.8em;
      color: #575656;
      margin-top: 10px;
    }
    .Swal-title{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 1.4em;
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

  // check if the input field has a value
 if(isset($_POST['year'],$_POST['idno'],$_POST['lastname'],$_POST['firstname'],$_POST['middlename'],$_POST['sem'],$_POST['contact'],$_POST['yearlevel'],$_POST['section'])){
    $year=$_POST['year'];
    $id=$_POST['idno'];
    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $sem=$_POST['sem'];
    $contact=$_POST['contact'];
    $yearlevel=$_POST['yearlevel'];
    $section=$_POST['section'];
   

    //check if the id is exist already in our database
   $query= mysqli_query($conn,"SELECT IDNo FROM student WHERE IDNo='$id' ");
   $result=mysqli_fetch_assoc($query);

    if($result){
      echo "<script>duplicateID();</script>";
    }else{
      $insert = mysqli_query($conn,"INSERT INTO student(SchoolYear,IDNo,LastName,FirstName,MiddleName,Semester,ContactNo,YearLevel,Section) VALUES('$year','$id','$lastname','$firstname','$middlename','$sem','$contact','$yearlevel','$section')");

        // check if the query is added
        if($insert){
          // redirect to the message info
          // header('location:CreateStudentMessage.php');
          echo "<script>CreateStudentMessage();</script>";
        }else{
          echo "<script>failedAdded();</script>";
        }
    }

 }

 // close the connection after it's done
 $conn->close();

