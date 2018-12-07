document.getElementById("menu-item-1477").getElementsByTagName('a')[0].removeAttribute("href");

var dropDown = document.getElementById("menu-item-1477").querySelector(".sub-menu");
var collapseButton = document.getElementById("collapse-button");
var navBar = document.getElementById("menu-primary-menu");
var dropEnable = false;
var collapseEnable = false;

console.log(navBar);

document.getElementById("menu-item-1477").addEventListener("click", function(){
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
