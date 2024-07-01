<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AMA | ERROR </title>
  <link rel="icon" href="Image/Logo.png" type="image/x-icon">

  <style>
    
    body{
      background: url('Image/user.png') no-repeat;
      background-size: contain;
      background-color:#D2CECD;
      background-position: center right 120px;
      background-position-y: 50px;
    }
   .container{
     padding: 20px 300px 20px 300px;
     margin-top: 40px;
   }
    
    .container-main h1{
      text-align: center left;
      margin-top: 40px;
      margin-bottom:0px ;
     font-size: 2.5em;
     font-family: Arial, Helvetica, sans-serif;
     
    }
    .container-main , .footer-container{
      margin: 40px;
      padding: 10px;
    }

    .footer-container button{
      gap: 30px ;
      margin-top: 30px;
      padding: 10px;
      font-size: 1.1em;
      font-family: Arial, Helvetica, sans-serif;
      text-decoration: none;
      
    }
    .footer-container a{
      text-decoration: none;
    }
    #button1{
      margin-right: 0 30px;
    }
    #button1 a {
      text-decoration: none;
      color: #000;
    }

    footer{
      text-align: center;
    }

  </style>
</head>
<body>
 <main>
   <div class="container">
    <section>
        <div class="container-main">
      
        <h1> Invalid Username or <br> Password </h1><br>
        </div>
      </section>

      <footer>
        <div class="footer-container">
       
          <button id="button1"><a href="Log_inFormDark.php"> Return </a></button>
        </div>
      </footer>
   </div>
   
 </main>
 
</body>
</html>
