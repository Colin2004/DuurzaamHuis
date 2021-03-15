function darkmode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
  }

  function darkswitch() {
    var x = document.getElementById("myDIV");
    if (x.innerHTML === "Switch to darkmode") {
      x.innerHTML = "Switch to lightmode";
    } else {
      x.innerHTML = "Hello";
    }
  }