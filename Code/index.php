
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>AMA</title>
  <style>
    body{
      background-color: #CECECE;
    }

    .logo{
      position:absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
    }

    .five-pointed-star {
      --star-color:#000000;
      margin:1em auto;
      top: 1.5rem;
      margin-left: 11rem;
      font-size:2em;
      position: absolute;
      display: block;
      width: 0px;
      height: 0px;
      border-right: 1em solid transparent;
      border-bottom: 0.7em solid var(--star-color);
      border-left: 1em solid transparent;
      transform: rotate(65deg);
     }
     .five-pointed-star:before {
      border-bottom: 0.8em solid var(--star-color);
      border-left: 0.3em solid transparent;
      border-right: 0.3em solid transparent;
      position: absolute;
      height: 0;
      width: 0;
      top: -0.45em;
      left: -0.65em;
      display: block;
      content:"";
      transform: rotate(-35deg);
     }
     .five-pointed-star:after {
      position: absolute;
      display: block;
      top: 0.03em;
      left: -1.05em;
      width: 0;
      height: 0;
      border-right: 1em solid transparent;
      border-bottom: 0.7em solid var(--star-color);
      border-left: 1em solid transparent;
      transform: rotate(-70deg);
      content:"";
     }
     .name-logo{
      position:relative;
      display: flex;
      font-size: 3em;
      font-family:Arial, Helvetica, sans-serif;
      font-weight: bolder;
     }
     
     .button-proceed{
      margin-top: 6.9vh;
      display: flex;
      justify-content: center;
     }
     .button-proceed button{
      padding: 10px 20px;
      border: 1px solid #000000;
      border-radius:10px;
      color: #CECECE;
     }
     .button-proceed a{
      text-decoration: none;
      color: #000;
     }
   
  </style>
</head>
<body>
  <main>
    <div class="logo">
      <div class="five-pointed-star">
      </div>
      <div class="name-logo">
        <h1>AMA</h1>
      </div>
      <div class="button-proceed">
        <button><a href="Log_inForm.php" target="_self">Proceed</a></button>
      </div>
    </div>
  </main>
</body>
</html>

