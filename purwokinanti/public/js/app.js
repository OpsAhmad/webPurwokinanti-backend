hamburger_one = document.getElementById("h-one");
hamburger_two = document.getElementById("h-two");
hamburger_three = document.getElementById("h-three");
menu = document.getElementById("menu");

function navbar_responsive() {
  if (menu.classList.contains("nav-small-hide")) {
    menu.classList.remove("nav-small-hide");
    hamburger_one.style.transform =
      "rotate(135deg) translateY(-4px) translateX(4px)";
    hamburger_two.style.transform = "rotate(-135deg) translateY(0px)";
    hamburger_three.style.display = "none";
  } else {
    menu.classList.add("nav-small-hide");
    hamburger_one.style.transform = "rotate(0deg) translateY(0) translateX(0)";
    hamburger_two.style.transform = "rotate(0) translateY(0) translateX(0)";
    hamburger_three.style.display = "block";
  }
}

var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.transform = "translateY(0)";
  } else {
    document.getElementById("navbar").style.transform = "translateY(-50px)";
  }
  prevScrollpos = currentScrollPos;
};

/* Custom nav select */
