
// Dapat mo dili anay mo submit using the keyboard


// oninput="this.value = this.value.slice(0,1).toUpperCase() + value.substring(1); mao ni ang kadtong first input

function capitalizedInput(event){// function with parameter

  // get the input value
  let lastnameValue = event.target.value;
  
  // split the value input if there is a word
  let words = lastnameValue.split(' ');

  //capitalize the first letter of each word
  let captalized = words.map(word => {
    return word.charAt(0).toUpperCase() + word.slice(1);

  });

  // joint the words
  let combined = captalized.join(' ');

  // after joining , set the input value to be capitalized
  event.target.value = combined;
}

function UpdateValid(){

  const getValue = id => document.getElementById(id).value;
  const schoolyear = getValue('school-year');
  const idno = getValue('idno');
  const lastname=getValue('lastname');
  const firstname = getValue('firstname');
  const middlename = getValue('middlename');
  const sem = getValue('sem');
  const contact=getValue('Contact');
  const yearlevel=getValue('year-level');
  const section=getValue('section');


  if(schoolyear== "" || idno==""|| firstname == "" || sem == "" || contact == "" || yearlevel == "" || section == ""){
    Swal.fire({
      icon:"error",
      title:"Please complete all fields",
      confirmButtonText:'OK',
      focusCancel:true ,
      allowOutsideClick:false,
      allowEscapeKey:false,
      preconfirm: () => {
        return Swal.clickConfirm();
      }
     });

     document.getElementById('UpdateStudentForm').addEventListener('submit',(e)=>{
       e.preventDefault();
     });
    }else if(contact.length !== 11 || contact.charAt(0) !== "0" ||  contact.charAt(1) !== "9"){
    Swal.fire({
      icon:"error",
      title:"Invalid Contact No.",
      text:"Please enter a valid Contact No.",
      confirmButtonText:'OK',
      focusCancel:true,
      allowOutsideClick:false,
      allowEscapeKey:false,
      preconfirm: () => {
        return Swal.clickConfirm();
      }
    });

    // cancel the submittion
   document.getElementById('UpdateStudentForm').addEventListener('submit',(e)=>{
    e.preventDefault();
  });

  }else{
    document.getElementById('UpdateStudentForm').addEventListener('submit',(e)=>{
    e.preventDefault();
  });

    Swal.fire({
     title:"Are you sure you want to Update this Student ? ",
     showCancelButton:true,
     cancelButtonText:'NO',
     confirmButtonText:'YES',
     focusCancel:true,
     allowOutsideClick:false,
     allowEscapeKey:false,
     preconfirm: () => {
        return Swal.clickConfirm();
      }
   }).then((result) => {
     if(result.isConfirmed){
      //  const form=document.getElementById('createStudentForm').action='Create.php';
       document.getElementById('UpdateStudentForm').submit();
   }else{
    //  const form=document.getElementById('createStudentForm').action='CreateStudentInput.php';
        Swal.fire({
        icon:"error",
        title:"Student Updation Cancelled ",
        confirmButtonText:'OK',
        focusCancel:true,
        allowOutsideClick:false,
        allowEscapeKey:false,
        preconfirm: () => {
        return Swal.clickConfirm();
      }
        // need pa na dapat dili mo click sa gawas
       });
     }
  });

  }

  
}
