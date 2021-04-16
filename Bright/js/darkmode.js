function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}

function darkmode() {
  var element = document.body;
  element.classList.toggle("dark-mode");
}

function darkswitch() {
  var x = document.getElementById("darkmodeknop");
  if (x.innerHTML === "darkmode") {
    x.innerHTML = "lightmode";
  } else {
    (x.innerHTML === "lightmode") 
      x.innerHTML = "darkmode";
  }
}