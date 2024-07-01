
<?php include_once "session.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="Image/Logo.png" type="image/x-icon">
  <link rel="stylesheet" href="../Code/Style/DeleteStyle.css">
  <title> AMA | DELETE </title>
  <scrit src="https://cdn.jsdelivr.net/npm/sweetalert2@11"> </scrit>
  <script type="module"></script>

</head>
<body>
    <section>
      <legend> Delete Student </legend>

      <form id="form" action="DeleteHandle.php" method="POST">
        <input type="text" name="idno" placeholder="Enter ID Number" id="idno" required>
        <div class="container-button">
        <button type="Reset">Reset</button>
        <button><a href="Home.php" type="button">Back</a></button>
        <button onclick="remove();" id="button" type="button">Delete</button>
        </div>
        <div class="popup">
        <p id="message"></p>
        </div>
      
      </form>

    </section>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../Code/assets/DeleteStudentFile/DeleteStudValidation.js"></script>
</body>
</html>

