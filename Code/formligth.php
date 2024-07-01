
<?php
  require('connection.php');
  session_start();
  if(isset($_POST['user'])){
    
    $username = $conn ->real_escape_string(stripcslashes($_REQUEST['user']));
    $password = $conn ->real_escape_string(stripcslashes($_REQUEST['password']));

    $query="SELECT * FROM form WHERE BINARY username='$username' AND BINARY password='$password' ";
  // BINARY - used to treat the characters in MYSQL as case-sensitive
  
    $result=mysqli_query($conn,$query) or die($mysqli_error($conn));
    $get=mysqli_fetch_array($result);
    $countrow=mysqli_num_rows($result);

    if($countrow==1){// check if the username and passoword exist to our database
      $_SESSION['Fullname']=$get['Fullname'];
      header('location:home.php');// redirect to the page if login succesfullly
    }else{
      header('location:errorwhite.php');// redirect to the page if login failed message
    }
   
  }


