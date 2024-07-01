
function remove(){
  // check if the form is empty
  if(document.getElementById('idno').value === ""){


    Swal.fire({
      icon:'error',
      title:"Oops...",
      text:'Please enter ID Number',
      showCloseButton:true,
      confirmButtonText:'Return',
      allowOutsideClick:false,
      allowEscapeKey:false,
      preconfirm : () => {
        return Swal.clickConfirm();
      }
    });
   
  }else{
     // Prevent the form to submit directly without reading the javascript code
  document.getElementById('form').addEventListener('submit', (e) => {
    e.preventDefault();
  });
  
  Swal.fire({
  text: 'Are you sure you want to delete this student record ?',
  icon: 'warning',
  showCancelButton: true,
  //  buttons:['Yes', 'No'],
  confirmButtonText: 'Yes',
  cancelButtonText: 'No',
  focusCancel:true,
  allowOutsideClick:false,
  allowEscapeKey:false,
  preconfirm: () => {
    return Swal.clickConfirm();
  }

}).then((result) =>{

  console.log(result);

  // check if it is confirm yes or no or true or false
    if(!result.isConfirmed){
      const form = document.querySelector('#form');
      Swal.fire({
       title:'Deletion Cancelled',
       showCloseButton: true,
       focusCancel:true,
       allowOutsideClick:false,
       allowEscapeKey:false,
        preconfirm: () => {
          return Swal.clickConfirm();
        }
     });
     form.reset();
    }else{
      console.log(document.getElementById('form'));
      const form=document.getElementById('form');
      form.action='DeleteHandle.php';
      form.submit();
    // });
    }
});
}
 
}