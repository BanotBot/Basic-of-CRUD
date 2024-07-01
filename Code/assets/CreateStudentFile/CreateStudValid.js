
 //oninput="this.value = this.value.slice(0,1).toUpperCase() + value.substring(1); mao ni ang kadtong first input


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

  function submitForm(){

    // check all input if they have a value before clicking the submit button
    // dapat dili anay maka click ng button if wala pay loon ang atong mga input fields ng form

    // get the id value
    const getValue = id => document.getElementById(id).value;

    const schoolyear = getValue('school-year');
    const idno = getValue('idno');
    const firstname = getValue('firstname');
    const sem = getValue('sem');
    const contact=getValue('Contact');
    const yearlevel=getValue('year-level');
    const section=getValue('section');
   
    if(schoolyear== "" || idno == "" || firstname == "" || sem == "" || contact == "" || yearlevel == "" || section == ""){
      Swal.fire({
        icon:"error",
        title:"Oops...",
        text:"Please complete all fields",
        confirmButtonText:'OK',
        focusCancel:true ,
        allowOutsideClick:false,
        allowEscapeKey:false,
        preconfirm: () => { // this is use for the keyboard enter that if a user enter , it will return to the confirm button
          return Swal.clickConfirm();
        }
       });

       document.getElementById('createStudentForm').addEventListener('submit',(e)=>{
      e.preventDefault();
    });

    // check the contact number if valid or not
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
     document.getElementById('createStudentForm').addEventListener('submit',(e)=>{
      e.preventDefault();
    });

    }else{
      document.getElementById('createStudentForm').addEventListener('submit',(e)=>{
      e.preventDefault();
    });

      Swal.fire({
       title:"Are you sure you want to Create this Student ? ",
       showCancelButton:true,
       cancelButtonText:'NO',
       confirmButtonText:'YES',
       focusCancel:true,
       allowOutsideClick:false,
       allowEscapeKey:false,
       preconfirm: () => { // dapat dili ma disable ang keyboard na enter , then dapat inig enter ng keyboard is dapat mo-agi anay sya sa button confirmation 
        return Swal.clickConfirm();
      }

     }).then((result) => {
       if(result.isConfirmed){
         document.getElementById('createStudentForm').submit();
     }else{
          Swal.fire({
          icon:"error",
          title:"Student Creation Cancelled ",
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
