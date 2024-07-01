
<?php include_once "session.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="Image/Logo.png" type="image/x-icon">
  <link rel="stylesheet" href="../Code/Style/UpdateStyle.css">
  <title> AMA | UPDATE</title>
  <style>
   
  </style>
</head>
<body>
  <main>
    <div class="table-container">
      <legend><h1> Students Information </h1></legend>
      <table border="1">
        
        <thead>
          <th> School Year </th>
          <th> ID Number </th>
          <th> LastName </th>
          <th> FirstName </th>
          <th> MiddleName </th>
          <th> Semester </th>
          <th> Contact Number </th>
          <th> Year Level </th>
          <th> Section </th>
          <th> Action </th>
        </thead>
   

        <?php

        include_once 'connection.php';
        $stud_display = mysqli_query($conn,"SELECT * FROM student ORDER BY IDNo ASC");
        while($res=mysqli_fetch_assoc($stud_display)){
        
        ?>
          <tr>
            <!-- echo $res['SchoolYear']; - the array name must the database attribute name you want to print  -->
            <td> <?php  echo $res['SchoolYear'];?></td>
            <td> <?php  echo $res['IDNo'];?></td>
            <td> <?php  echo $res['LastName'];?></td>
            <td> <?php  echo $res['FirstName'];?></td>
            <td> <?php  echo $res['MiddleName'];?></td>
            <td> <?php  echo $res['Semester'];?></td>
            <td> <?php  echo $res['ContactNo'];?></td>
            <td> <?php  echo $res['YearLevel'];?></td>
            <td> <?php  echo $res['Section'];?></td>
            <td><a href="UpdateStudent.php?idno=<?php echo $res['IDNo'];?>" id="edit"> EDIT </a></td>
          </tr>
      <?php } ?>
      </table>

    </div>
    <button id="back"><a href="Home.php">Back</a></button>
  </main>
</body>
</html>
