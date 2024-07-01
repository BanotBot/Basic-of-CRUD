
  document.addEventListener('DOMContentLoaded',()=>{
    
  });

  history.replaceState(null,document.title,'Delete.php');
  window.addEventListener('popstate',()=>{
    window.location.href='Delete.php';
  });
  