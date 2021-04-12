var toggleDarkmode = document.querySelector(".toggle-btn input");

// console.log(toggleDarkmode);

toggleDarkmode.addEventListener("click", toggleDarkmodeAppearance);

function toggleDarkmodeAppearance() {
  if (toggleDarkmode.checked == true) {
    document.querySelector("body").classList.add("darkmode");
  } else {
    document.querySelector("body").classList.remove("darkmode");
  }
}