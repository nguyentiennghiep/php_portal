var dropDown = document.getElementById("drop-link");
var collapseButton = document.getElementById("collapse-button");
var navBar = document.getElementById("nav-bar");
var dropEnable = false;
var collapseEnable = false;
function dropMenu() {
  if (dropEnable === false) {
    dropDown.classList.add("drop-active");
    dropEnable = true;
  } else {
    dropDown.classList.remove("drop-active");
    dropEnable = false;
  }
}


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

// document.addEventListener("DOMContentLoaded", function (event) {
//     var dropDown = document.getElementById("drop-link");
//     var collapseButton = document.getElementById("collapse-button");
//     var navBar = document.getElementById("nav-bar");
//     var dropEnable = false;
//     var collapseEnable = false;
//     function dropMenu() {
//         if (dropEnable === false) {
//             dropDown.classList.add("drop-active");
//             dropEnable = true;
//         } else {
//             dropDown.classList.remove("drop-active");
//             dropEnable = false;
//         }
//     }


//     function onCollapse() {
//         if (collapseEnable === false) {
//             collapseButton.classList.add("open");
//             navBar.classList.add("open-menu");
//             collapseEnable = true;
//         } else {
//             collapseButton.classList.remove("open");
//             navBar.classList.remove("open-menu");
//             collapseEnable = false;
//         }
//     }
// });