function dropdown() {
  document.getElementById("dropdown").classList.toggle("show");
  }
  window.onclick = function(event) {
  if (!event.target.matches('.dropdown-button')) {

  var dropdowns = document.getElementsByClassName("dropdown-content");
  var i;
  for (i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('show')) {
      openDropdown.classList.remove('show');
    }
  }
  }
  }
  function showLess() {
   var x = document.getElementById('pwholess');
   if (x.style.display === 'block') {
     x.style.display = 'none';
   } else {
     x.style.display = 'block';
   }
  }
  function showMore() {
   var b = document.getElementById('pwho')
   if (b.style.visibility === 'hidden') {
     b.style.visibility = 'visible'
   } else {
     b.style.visibility = 'hidden'
   }

  }
