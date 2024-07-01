
// DOMContentLoaded, - you ensure that the script will only run after the entire HTML document is completely loaded and the DOM is fully built. This ensure that if the html document have done loaded it will execute or the js code will ready, this will make your code faster, unlike in the “load” – this will wait to parse all the resources such: image, css file. etc. While the DOMContentLoaded – this will not wait for that, after the html document loaded. 
document.addEventListener('DOMContentLoaded',() => {
  
});

  // history.replaceState(stateObject, title, url); - this is the format of the popstate
  history.replaceState(null,document.title,'CreateStudentInput.php');

// when the back button is clicked it will be redirected to this page
window.addEventListener('popstate',() => {
  window.location.href='CreateStudentInput.php';
});

