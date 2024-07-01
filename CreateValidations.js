
function createValidations() {
  
  /*
  const school = document.getElementById("school-year").value;
  const lastname = document.getElementById("lastname").value;
  const firstname= document.getElementById("firstname").value;
  const middlename = document.getElementById("middlename").value;
  const sem = document.getElementById("sem").value;
  const contact = document.getElementById("contact").value;
  const year = document.getElementById("year-level").value;
  const section = document.getElementById("section").value;
*/
  const id = document.getElementById("id-no").value;
  const idcheck = Number.isInteger(id);
 
  /*
  if(school === "" || id === "" || lastname === "" || firstname === "" || middlename === "" ||  sem === "" || contact === "" || year === "" || section === "") {
    alert("Please fill in all required fields");
    return false; 
  }
  */

// dapat mo refresh ang input ng imo gi input if wrong ang input 


/*
  if(idcheck === false || id.value.length != 9){
     id.reset();
     document.getElementById('id-no').value = location.reload();
     return alert(" Invalid ID number ");
  }
  
  */

   let  contact = document.getElementById("Contact").value;
  
    if(contact.length != 10 && contact.charAt(0) != "0") {
      return alert(" Invalid contact number ");
      
    }


}