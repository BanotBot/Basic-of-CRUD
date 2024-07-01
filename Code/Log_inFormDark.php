<!-- Dapat dili na makita sa back button ang kani na form if mo change ka sa white mode  -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Style/FormDark.css">
  <link rel="icon" href="Image/Logo.png" type="image/x-icon">
  <title>AMA | LOGIN  </title>
  <!-- <script src="DisableBackButtonBrowser.js"></script> -->
</head>
<body>
  <main>
    <div class="container-main">
      <aside>
        <a href="Log_inForm.php" title="White Mode">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADAklEQVR4nO1ZTWvUUBQN2mItLaK04kLdW/0LVqwbQVCR+iNaqVo34kZc1b3+Ar9+iO1S0H5I1boYKQwSJzk3pviNHrlv3gxk2plOMkmalhx4MLzJu/ecvJub+24cp0SJEjsKirwk8MrZ7aAIdTi7HSyFFAyF2xEGwRFWKgN5CSHZzyA4HHfd9iJEvlFkiWE4mrUQhuEogTcU+UrgUGzCbQ2TByiyaEktxxFDkQWKzMcSIbJsfS3qziQm3oWDd3TdY6k62OxjNQsfmYvJTUTbrU+QAFqhNpKGbhpi1PH3Vqck9xEYp8gjU56IfCbg2t+PCZzVayJrNjaOEvhhbOYlInIXw3AkMgecI/C6kanaDr0GGI+sDcORNHa3ZxC4R+CfJbtE4CY9b4zV6qAZ+lvnGmGp1wbBXadIoMgDS+4nganW0Nki9KYJ/LJr7jtFAIFL5u6qCJHzXa8TmTBigL/0/YvZstwGJPsIfLB3dir2euBGM5WTfc5OgSKTzZTZIZzarif3U2TF2riWDctuiIi8sLsx04ON21bIk3TZxSEBrBkSnncqsQ3fP21vxvv0iLnuEEU+dXgHLESuF9kw8647lNhnrTZsbYdJeSQREqli1bmZr9WGcxYyn9Tf1iQaGcvzxhLb8P0zqYdWDw/7rR5s3LF3+amzU2AQXLckVjSVJky/b62NyWxYdkekn8BHuyvTsdcDM3btWuonwbigyFVLRmuniRjrLtgSRcuby04RQJGHTTFadnQIMxNOuhONolFkzikKqBVtQ0x9aNzPmoykqVRHPTvNNp+Jesk/l6S0Sb9grFYHI3PAlebbvvPBaq01nLTtw7yfE9t30lPel9ZTnUkA9WLyualq629/HasUeWb+ayFsdgyQXI+6keaDikmh/LbZTxty+TQfsmzZ5NE3y63vxKzFmOaBNhSStUxjfbFiVMwS19cPJia+ybjvnyDwJ9cmtphOzG963vHYhDsaB07m+lmhUhlQn05RULgPPUlRCika9tKOLKR+xi5RooQTF/8BWAYX5VysRmYAAAAASUVORK5CYII=" alt="White-Mode">
        </a>
      </aside>
      <section>

          <form action="formblack.php" id="dark_form" name="form"  method="POST" >
            <div class="form-container">
              <h1 id="caption">Log In </h1>
  
            <div class="id-number">
              <label for="idno" id="idno">
               Username
              </label><br>
              <input type="text" title="Username" name="user" id="dark_form_id" required>
            </div>
  
            <div class="password">
              <label for="password">
                Password
              </label><br>
              <input type="password" id="dark_form_pass" name="password" title="password" required >
            </div>
            
            <p id="forgot-pass">Forgot Password ?</p>

            <div class="submit-button">
              <input type="submit" value="Submit" name="submit" id="dark_submit">
            </div>
          </form>
        </div>

      </section>
    </div>
  </main>

</body>
</html>