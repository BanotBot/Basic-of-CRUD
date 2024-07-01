<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Style/FormLight.css">
  <link rel="icon" href="Image/Logo.png" type="image/x-icon">
  <title>AMA | LOGIN </title>
</head>

<body>
  <main>
    <div class="container-main">
      <aside>
          <a href="Log_inFormDark.php">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB2UlEQVR4nO2Zy0rDQBRAD8XUWgRRjLhQP0lrkf6Stf6FVv0O26VQrQutj4JrN+IbFIwM3EIMrTbJZDKWOXA3aZKb09vO4wYcDkfeHAMnTACBxL8ncCKWYV1FFoCSQREPmCcDiVegC/gGRHzgFHgE5tDINHAmD3QeU6YNtGKc70uOQHKqymglnOASWNadgJ85LjLKkbmMMYlRpU8yAEQppfjppsKXxG9DkhaBGnAI9IAXiZ4cq8k5YZaAd7mnMYnwt7gYOVYF+qGRalTcApuRa9W9dFQ3FQWgMYZANHbkWmvYTSAxiDqWUE0hMYhK3hJF+b2nFekPGQCMUtMgMYgtcuRIo0gzT5FrjSJqntHGLHD3SzK1AAzzpFFE3Svpc8QWaVki0kIzVxpF1CI0Nw40iuzlKTIxw68H3EzChIisYtNIfAHrWEIjhcg2FlGQJXncStRtWMZPAeXIscqY/xm1ItiIXKvaPto7Jn+htqMd4H7Irs6TEagpc8OzhGoo7Mtn0QdWE+CD6a1uuPnQkcqkxZOGXGCq+ZBly8ZE38xY38nPWqYsfd8kpY/7xsoPyaicM2hkFfg03MTuAh/ACppZM/xaoSQ5rSGpiHU4EduYmIq0s9hjOxwOYvEN8/+wasFeRkQAAAAASUVORK5CYII=" alt="Dark-Mode">
          </a>
      </aside>
     
      <section>
        <form action="formligth.php" id="myForm" name="form" method="POST">
          <div class="form-container">
            <h1 id="caption">Log In </h1>
  
            <div class="id-number">
              <label for="idno">
               Username
              </label><br>
              <input type="text" title="Username" id="user" name="user" required >
            </div>


            <div class="password-container">
              <label for="password">
                Password
              </label><br>
              <input type="password" name="password" title="password" id="pass" required>
            </div>
            <p id="forgot-pass">Forgot Password ?</p>

            <div class="submit-button">
              <input type="submit" value="Submit" name="submit" id="submit">
            </div>
          </div>
        </form>
      </section>
    </div>
  </main>
</body>
</html>
