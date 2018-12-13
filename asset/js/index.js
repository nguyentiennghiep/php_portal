document.querySelector("#menu-primary-menu li:last-child").getElementsByTagName('a')[0].removeAttribute("href");

var dropDown = document.querySelector("#menu-primary-menu li:last-child").querySelector(".sub-menu");
var collapseButton = document.getElementById("collapse-button");
var navBar = document.getElementById("menu-primary-menu");
var dropEnable = false;
var collapseEnable = false;

document.querySelector("#menu-primary-menu li:last-child").addEventListener("click", function(){
  if (dropEnable === false) {
    dropDown.classList.add("drop-active");
    dropEnable = true;
  } else {
    dropDown.classList.remove("drop-active");
    dropEnable = false;
  }
});


function onCollapse() {
  if (collapseEnable === false) {
    collapseButton.classList.add("open");
    navBar.classList.add("open-menu");
    collapseEnable = true;
  } else {
    collapseButton.classList.remove("open");
    navBar.classList.remove("open-menu");
    collapseEnable = false;
  }
}
