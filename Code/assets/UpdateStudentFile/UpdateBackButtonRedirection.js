
  document.addEventListener('DOMContentLoaded',()=>{
  });
  
  history.replaceState(null,document.title,'Update.php');
  window.addEventListener('popstate',()=>{
    window.location.href='Update.php';
  });


// problem dapat mobalik sija sa student if mag gamit kita ng back button ng browser dili kay mobalik siya sa update na naay loon
