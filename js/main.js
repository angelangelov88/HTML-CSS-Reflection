// This function has been added to make the header and navbar sticky. They disappear when srolling down and appear again on scroll up 
(function(){

  var doc = document.documentElement;
  var w = window;

  var prevScroll = w.scrollY || doc.scrollTop;
  var curScroll;
  var direction = 0;
  var prevDirection = 0;

  var header = document.querySelector('.header-container');
  var navbarHeader = document.querySelector('.main-navigation');

  var checkScroll = function() {

    /*
    ** Find the direction of scroll
    ** 0 - initial, 1 - up, 2 - down
    */

    curScroll = w.scrollY || doc.scrollTop;
    if (curScroll > prevScroll) { 
      //scrolled up
      direction = 2;
    }
    else if (curScroll < prevScroll) { 
      //scrolled down
      direction = 1;
    }

    if (direction !== prevDirection) {
      toggleHeader(direction, curScroll);
    }
    
    prevScroll = curScroll;
  };

  var toggleHeader = function(direction, curScroll) {
    if (direction === 2 && curScroll > 205) { 
      
      //replace 205 with the height of your header in px

      header.classList.add('hide');
      navbarHeader.classList.add('hide');
      prevDirection = direction;
    }
    else if (direction === 1) {
      header.classList.remove('hide');
      navbarHeader.classList.remove('hide');

      prevDirection = direction;
    }
  };

  window.addEventListener('scroll', checkScroll);

})();




//Slider jQuery 

$(document).ready(function(){
  $(".owl-carousel").owlCarousel({

    items: 1,
    center: true,
    dots: true,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true
  
  });
});


//Cookies

function PopUp(hideOrshow) {
  if (hideOrshow == 'hide') {
      document.getElementById('ac-wrapper').style.display = "none";
      document.body.style.overflow = 'visible';
  }
  else  if(localStorage.getItem("popupWasShown") == null) {
      localStorage.setItem("popupWasShown",1);
      document.getElementById('ac-wrapper').removeAttribute('style');
      document.body.style.overflow = 'hidden'; //disables the scroll when the cookie message appear
}
}
window.onload = function () {
  setTimeout(function () {
      PopUp('show');
  }, 0);
}


//Side navbar
//I added variables for all the elements in order to make the code readable
const sidebarContainer = document.getElementById("sidebar-container");
const hamburger = document.getElementsByClassName('hamburger')[0];
const hamburgerXs = document.getElementsByClassName('hamburger-xs')[0];
const body = document.body;
const blocker = document.getElementsByClassName('blocker')[0];

//I added this function to delay the scroll appearing when the sidebar is there
function scrollDelay() {
  blocker.style.overflowY = 'scroll';
}

//This is the function that is triggered on click on burger menu button. 
function openNav() {
    sidebarContainer.classList.toggle("shown");
    body.classList.toggle("slide-in");
    setTimeout(function() {
      sidebarContainer.classList.toggle("slide-in");
    }, 1);
    setTimeout(scrollDelay, 600);
    body.style.overflow = 'hidden';
    hamburger.classList.add("is-active");
    hamburgerXs.classList.add("is-active");
}

// //This is the function that closes the sidebar on clicking anywhere on the page but the sidebar
function closeNav() {
  sidebarContainer.classList.toggle("slide-in");
  body.classList.toggle("slide-in");
  setTimeout(function() {
    sidebarContainer.classList.toggle("shown");
  }, 600);
  body.style.overflow = 'auto';
  blocker.style.overflowY = 'hidden';
  hamburger.classList.remove("is-active");
  hamburgerXs.classList.remove("is-active");
}



//This is the JS for the maps on the contact page

var mymap = L.map('mapid').setView([52.235462735307294, 0.154262015014908], 15);
var mymap2 = L.map('mapid2').setView([52.576037413411186, 1.1366218466544036], 15);
var mymap3 = L.map('mapid3').setView([52.55581865448684, 1.7129035269914628], 15);


L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYW5nZWxsZXZza2kiLCJhIjoiY2t0enhxMDBqMjBheTJwcXRnMzhtcnE1YiJ9.KOMUOn5bie5K-tnE6Vc8dw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYW5nZWxsZXZza2kiLCJhIjoiY2t0enhxMDBqMjBheTJwcXRnMzhtcnE1YiJ9.KOMUOn5bie5K-tnE6Vc8dw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap2);


L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYW5nZWxsZXZza2kiLCJhIjoiY2t0enhxMDBqMjBheTJwcXRnMzhtcnE1YiJ9.KOMUOn5bie5K-tnE6Vc8dw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap3);


var marker = L.marker([52.235462735307294, 0.154262015014908]).addTo(mymap);
var marker2 = L.marker([52.576037413411186, 1.1366218466544036]).addTo(mymap2);
var marker3 = L.marker([52.55581865448684, 1.7129035269914628]).addTo(mymap3);

