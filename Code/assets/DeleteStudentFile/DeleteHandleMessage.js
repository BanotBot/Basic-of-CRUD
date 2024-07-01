  // Deleted Successfully
  function deleteSuccess(){
    Swal.fire({
      icon:"success",
      title:"Deleted Successfully",
      text:"Click OK to continue",
      focusCancel:true,
      allowOutsideClick:false,
      allowEscapeKey:false,
      preconfirm: () => {
         return Swal.clickConfirm();
       }
      }).then(() => {
      window.location.href = 'Delete.php';
    })
   }

//  ID number does not exist
   function isIDnotExist(){
     Swal.fire({
       icon: 'error',
       title: 'ID not exist',
       text: 'Click OK to continue',
       showCloseButton:true ,
       confirmButtonText: 'OK',
       focusCancel:true,
       allowOutsideClick:false,
       allowEscapeKey:false,
       preconfirm: () => {
          return Swal.clickConfirm();
        }
       }).then(() => {
       window.location.href='Delete.php';
     })
   }
    