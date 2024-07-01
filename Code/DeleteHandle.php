
<?php include_once "session.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="icon" href="Image/Logo.png" type="image/x-icon">
  <script src="../Code/assets/DeleteStudentFile/DeleteRedirectButton.js"></script>
  <!-- <script src="/assets/DeleteStudentFile/DeleteRedirectButton.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../Code/assets/DeleteStudentFile/DeleteHandleMessage.js"></script>
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
      margin-top:10px;
    }
    
 </style>
</head>
<body>
 
</body>
</html>

<?php

  include_once 'connection.php';
  if(isset($_POST['idno'])){
    $idno=$_POST['idno'];

    //query to check if the id exist
       $query=mysqli_query($conn,"SELECT IDNo FROM student WHERE EXISTS (SELECT IDNo FROM student WHERE IDNo='$idno') ");
    // this is one of the method to use ( $query=mysqli_query($conn,"SELECT IDNo FROM student WHERE IDNo='$idno' ");) 
     $result=mysqli_fetch_array($query);

    if($result){
      $delete=mysqli_query($conn,"DELETE FROM student WHERE IDNo='$idno' ");
      // check for the deletion if success or not
      if($delete){
        echo "<script>deleteSuccess();</script>";
      }else{
        echo "Failed to Delete ".mysqli_error($conn);
      }
      $conn->close();

    }else{
     // ID number does not exist
     //  header('location:deleteIDerror.php');
      echo "<script>isIDnotExist();</script>";
  }
//  Problem is sa id exist message mo message man gud na id not exist even though it exist
}

