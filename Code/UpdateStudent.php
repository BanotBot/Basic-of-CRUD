
<?php include_once "session.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="assets/UpdateStudentFile/UpdateBackButtonRedirection.js"></script>
  <link rel="icon" href="Image/Logo.png" type="image/x-icon">
  <title>AMA | UPDATE </title>
  <style>
    body{
      background: url('Image/update.png') no-repeat;
      background-size: contain;
      background-color:#D2CECD;
      background-position: center right 120px;
      background-position-y: 50px;
    }

    header h1{
      margin: 40px 50px 90px 50px ;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 3em;
      
    }

    .container{
      padding: 10px 30px ;
      display: flex;
      top: 40px;
    }
    .left-side{
      flex: 1;
      margin-left: 50px;
    }

    .right-side{
      flex: 1;
     margin-right: 210px;
    }

    input{
     padding: 10px 30px;
    }

    .button{
      margin-left: 340px;
      padding-top: 40px;
      display: flex;
      gap: 40px ;
    }
    .button button{
      padding: 10px 30px;
      font-size:1.1em ;
      font-family: Arial, Helvetica, sans-serif;
      border-radius: 10px;
      border: 1px solid #000;
    }

    button a{
      text-decoration: none;
      color: #000;
    }
  

    .Swal-title{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 1.8em;
      color: #575656;
      margin-top:10px;
    }
    .swal2-title{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 1.4em;
      color: #575656;
      margin-top: 10px;
    }
  </style>
  <!-- Error Pani sila -->
  <?php
   
   include_once 'connection.php';

   // check if the id has value
   if (isset($_GET['idno'])) {
       $idno = $_GET['idno'];
       $query = mysqli_query($conn, "SELECT * FROM student WHERE IDNo='$idno' ");
       $result = mysqli_fetch_assoc($query);
   } else {
       echo "<h1> ID Number is not exist </h1>";
       // Handle the case where IDNo is not provided
   }
   ?>

</head>
<body>
  <main>
    <header>
      <h1> Update Student </h1>
    </header>
   
    <section>
      <!-- idno - it is the name of the action we want to call -->
        <form  action="UpdateStudentHandleForm.php?idno=<?php echo $idno ?>" method="POST" id="UpdateStudentForm">
         <div class="container">

          <section class="left-side">
            <div class="input-field1">
              <div class="school-year-choices">
                <input list="school-year" name="year" id="year-school" value="<?php echo $result['SchoolYear'];?>"  placeholder="School Year" >
                 <datalist id="school-year">
                  <option value="2023-2024">
                  <option value="2025-2026">
                  <option value="2027-2028">
                  <option value="2029-2030">
                  <option value="2031-2032">
                 </datalist>
              </div><br>
    
                 <div class="id-no">
                  <input type="text" name="idno"  id="idno"  value="<?php echo $result['IDNo'];?>" placeholder="ID Number">
                 </div><br>
    
                 <div class="last-name">
                  <input type="text" name="lastname"  id="lastname" value="<?php echo $result['LastName'];?>"  oninput="capitalizedInput(event);" placeholder="LastName" >

                 </div><br>
    
                 <div class="first-name">
                  <input type="text" name="firstname"  id="firstname"  oninput="capitalizedInput(event);" value="<?php echo $result['FirstName']; ?>" placeholder="FirstName" >
                 </div><br>
    
                 <div class="middle-name">
                  <input type="text" name="middlename"  id="middlename"  oninput="capitalizedInput(event);" value="<?php echo $result['MiddleName']; ?>" placeholder="MiddleName" >
                 </div><br>
                 
            </div>
              
          </section>

             <aside class="right-side">
              <div class="right-side-input">
                <div class="semester">
                  <input list="semester" name="sem"  id="sem" value="<?php echo $result['Semester'];?>"  placeholder="Semester" >
                  <datalist id="semester">
                    <option value="1st Semester"></option>
                    <option value="2nd Semester"></option>
                  </datalist>
                </div><br>
  
                <div class="contact-number">
                  <input type="text" name="contact"  id="Contact"  pattern="09.*" title="Input must start zero and 9 " value="<?php echo $result['ContactNo']; ?>" placeholder="Contact No." maxlength="11">
                </div><br>
  
                <div class="year">
                  <input list="year" name="yearlevel"  id="year-level" value="<?php echo $result['YearLevel']; ?>" placeholder="Year Level">
                  <datalist id="year">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                  </datalist>
                </div><br>
  
                <div class="section">
                  <input list="sections" name="section" id="section"  value="<?php echo $result['Section']; ?>" placeholder="Section" >
                  <datalist id="sections">
                    <option value="A"></option>
                    <option value="B"></option>
                    <option value="C"></option>
                    <option value="D"></option>
                    <option value="E"></option>
                    <option value="F"></option>
                    <option value="G"></option>
                    <option value="H"></option>
                    <option value="I"></option>
                  </datalist>
                </div><br>
              </div>
             </aside>
         </div>

         <footer class="footer-container">
          <div class="button">
            <a href="Section1.html">
              <button><a href="Update.php">Back</a></button>
            </a>
            <button type="button" value="Submit" onclick="UpdateValid();"> Update </button>
           </div>
         </footer>
  </form>
         
    </section>
  </main>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="assets/UpdateStudentFile/UpdateStudentValid.js"></script>
</body>
</html>
