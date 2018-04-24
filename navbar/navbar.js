function hideShowDropdown(id){
  "use strict";
  var x = document.getElementById(id);
  if (x.className === "dropdown") {
    x.className += " show-content";
  } else {
    x.className = "dropdown";
  }
}

function hideShowMenu() {
  "use strict";
  var x = document.getElementsByClassName("navbar-top")[0];
  if (x.className === "navbar-top") {
    x.className += " responsive";
  } else {
    x.className = "navbar-top";
  }
}