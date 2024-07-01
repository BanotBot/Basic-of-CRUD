
function popUp(){
  alert('Login failed. Incorrect username or password');
}

function form_checker() { // this is the white form validations 

  let id = document.getElementById("id-no").value;
  let idno = id.toString();
  const password = document.getElementById("pass").value;
  const form = document.getElementById("myForm");
   
    if(idno ===''){// check if the input is empty
      alert(" Please enter ID number ");// pop-up message
      form.reset();// reset the form page if the input is not correct or wrong 
     //document.getElementById('idno').reset();// clear the input if the input is wrong 
     document.getElementById('myForm').value = location.reload();// reload again the entire page the form 
      return false;
      
    }
  
    if(idno.charAt(0) != "0" && idno.charAt(1) != "0"){
      alert(' Invalid ID number');
      form.reset();
     
      document.getElementById('myForm').value = location.reload();
      return false;

    }else  if(idno.length != 9){
      alert(' Not a Valid ID number');
      form.reset();
      //document.getElementById('idno').reset();
      document.getElementById('myForm').value = location.reload();
      return false;
    }
  
    if(password ===''){
      alert(" Please enter password ");
      form.reset();
      //document.getElementById('pass').reset();
      document.getElementById('myForm').value = location.reload();
      return false;
    }

  }


    function dark_form_checker(){// this is the dark mode input validations 
     
      let id = document.getElementById("dark_form_id").value;
      let idno = id.toString();
      const password = document.getElementById("dark_form_pass").value;
      const form = document.getElementById("dark_form");

    if(idno ===''){
        alert(" Please enter ID number ");
        form.reset();
        document.getElementById('dark_form').value = location.reload();
        return false;
      }

    if(idno.charAt(0) != "0" && idno.charAt(1) != "0"){
        alert(' Invalid ID number');
        form.reset();
        document.getElementById('dark_form').value = location.reload();
        return false;
    }else if(idno.length != 9){
      alert(' Not a Valid ID number');
      form.reset();
      document.getElementById('dark_form').value = location.reload();
      return false;
    }

    if(password === ''){
      alert(" Please enter password ");
      form.reset();
      document.getElementById('dark_form').value = location.reload();
      return false;
    }
    
   
}

  