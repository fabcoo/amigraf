function ouvreMenu() {
  document.getElementById("mySidenav").style.width = "1850px";
  document.getElementById("mySidenav").style.height = "100%";
  var elmt = document.getElementById("body");
  elmt.style.backgroundColor = "white";
}

function fermeMenu() {
  document.getElementById("mySidenav").style.width = "0";
  var elmt = document.getElementById("body");
  elmt.style.backgroundColor = "white";
}

function ouvreMenu2(){
  document.getElementById("rechheader").style.width = "650px";
}
function fermeMenu2(){
  document.getElementById("rechheader").style.width = "0";
}

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
