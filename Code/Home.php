
<?php include_once "session.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AMA | HOME</title>
  <link rel="icon" href="Image/Logo.png" type="image/x-icon">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="Style/Homes.css">
 
 <style></style>
</head>
<body>
  <main>
    <nav>
      
      <div class="nav-container">

        <div class="heading">
          <h1><span> AMA | </span>Student Modification</h1>
        </div>
        
        <!-- DROPDOWN TOOGLE  -->

        <div class="drop-down-container">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAALUlEQVR4nGNgGAUjChxmYGD4TyV8mNYWHKJ/+IwCYsBoKhoFlIPRVDQKBikAACEWdLZVlt8CAAAAAElFTkSuQmCC" alt="" class="menu" onclick="return menuToogle();">

<!--  Bali ijang dropdown toogle -->
        <!-- DROP DOWN CONTENTS  -->
        <div class="drop-down">
          <a href="#">
            <i class="bx bx-user"></i>
            Profile
          </a>

          <a href="#">
            <i class="bx bx-info-circle"></i>
            About Us
          </a>

          <a href="#">
            <i class="bx bx-help-circle"></i>
            Help Center
          </a>

          <a href="#">
            <i class="bx bx-cog"></i>
            Setting
          </a>

          <a href="Logout.php">
            <i class="bx bx-log-out"></i>
            Log out
          </a>
        </div>
      </div>

        </div>

      <section>

        <!-- create -->
        <div class="card-container">
            <a href="CreateStudentInput.php" title="Create">
              <img src="Image/create.jpg" alt="">
            </a>
           
           

        <!-- Read -->
          <a href="ReadStudent.php" title="Read">
            <img src="Image/read.jpg" alt="">
          </a>
        
           

        <!-- Update -->
          <a href="Update.php" title="Update">
            <img src="Image/update.jpg" alt="">
          </a>
         
      
        <!-- Delete -->
        
          <a href="Delete.php" title="Delete">
          <img src="Image/delete.jpg" alt="">
          </a>
      </div>
      </section>

      <section>
        <div class="caption-container">

          <div class="button-1">
            <button>Create </button>
          </div>

            <div class="button-2">
            <button>Read</button>
          </div>

          <div class="button-3">
            <button> Edit </button>
          </div>


          <div class="button-4">
            <button>Delete</button>
          </div>
          

        </div>
      </section>

    </nav>
  </main>
  <script src="../Code/assets/Home/homeMenu.js"></script>
  <script>
    
  // function menuToogle(){
  //   const dropdown=document.querySelector(".drop-down");
  //   dropdown.classList.toggle("show");
  // }

  // // if the user click anywhere outside the menu , it will close
  // window.onclick=(event) => {
  //   if(!event.target.matches('.menu')){
  //     const dropdowns=document.getElementsByClassName("drop-down");
  //     let x;
  //     for(x =0; x<dropdowns.length; x++){
  //       const openDropdown=dropdowns[x];// pass the value of the dropdown and along with the current value of x
  //       if(openDropdown.classList.contains("show")){
  //         openDropdown.classList.remove("show");
  //       }
  //     }
  //   }
  // }

  </script>
</body>
</html>


