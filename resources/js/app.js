import './bootstrap';
import  'flowbite'

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/*------DASHBOARD-USER---------*/

// const showNavbar = (toggleId, navId, bodyId, headerId) => {
//   const toggle = document.getElementById(toggleId),
//     nav = document.getElementById(navId),
//     bodypd = document.getElementById(bodyId),
//     headerpd = document.getElementById(headerId)

//   // Validate that all variables exist
//   if (toggle && nav && bodypd && headerpd) {
//     toggle.addEventListener('click', () => {
//       // show navbar
//       nav.classList.toggle('show')
//       // add padding to body
//       bodypd.classList.toggle('body-pd')
//       // add padding to header
//       headerpd.classList.toggle('body-pd')
//     })
//   }
// }
// showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

// // url precedente
// window.addEventListener("beforeunload", function () {
//   localStorage.setItem("previousPage", window.location.href);
// });

// const previousURL = localStorage.getItem("previousPage");
// if (previousURL) {
//   document.getElementById("previous-url").setAttribute("href", previousURL);
// }
