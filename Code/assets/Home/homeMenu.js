
 function menuToogle(){
  const dropdown=document.querySelector(".drop-down");
  dropdown.classList.toggle("show");
}

// if the user click anywhere outside the menu , it will close
window.onclick=(event) => {
   if(!event.target.matches('.menu')){
     const dropdowns=document.getElementsByClassName("drop-down");
     let x;
     for(x =0; x<dropdowns.length; x++){
      const openDropdown=dropdowns[x];// pass the value of the dropdown and along with the current value of x
       if(openDropdown.classList.contains("show")){
         openDropdown.classList.remove("show");
       }
     }
   }
 }
