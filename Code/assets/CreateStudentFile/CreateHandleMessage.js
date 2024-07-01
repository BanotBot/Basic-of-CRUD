
function CreateStudentMessage(){
  // Successfully Created
Swal.fire({
icon: 'success',
title: 'Successfully Created',
text: 'Click return to continue',
confirmButtonText: 'Return',
focusCancel:true,
allowOutsideClick:false,
allowEscapeKey:false,
preconfirm:() =>{
      return Swal.clickConfirm();
    }
}).then(() => {
  window.location.href='CreateStudentInput.php';
});

}

//  duplicate ID
function duplicateID(){
 Swal.fire({
   icon: 'error',
   title: 'Duplicate ID',
   text: 'Click OK to return to the form',
   confirmButtonText: 'OK',
   focusCancel:true,
   allowOutsideClick:false,
   allowEscapeKey:false,
   preconfirm: () => {
      return Swal.clickConfirm();
    }
   }).then(() => {
   return window.location.href='CreateStudentInput.php';
 })
}

// failed added if the input field is not added
function failedAdded(){
Swal.fire({
  icon: 'error',
  title: 'Failed Added',
  text: 'Click OK to continue return to the form',
  confirmButtonText: 'OK',
  focusCancel:true,
  allowOutsideClick:false,
  allowEscapeKey:false,
  preconfirm: () => {
      return Swal.clickConfirm();
    }
  }).then(() => {
  return window.location.href='CreateStudentInput.php';
})
}
