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


//Drop down menu in the contact form on click function

const dropDownMenu = document.getElementsByClassName('drop-down-contact')[0];
const outOfHours = document.getElementById('out-of-hours');

function showHide() {
   if (dropDownMenu.style.height == '350px'){
    dropDownMenu.style.height = '0';
    dropDownMenu.style.opacity = '0';
} else {
  dropDownMenu.style.height = '350px';
  dropDownMenu.style.opacity = '1';
}
}

outOfHours.addEventListener("click", showHide);



//Scroll page to the form on submit

const spanContent = document.getElementById("messageText");
const submitButton = document.getElementById("submit-button");


function checkSpanContent() {
if (!spanContent.innerHTML == "") {
  setTimeout(function() {
    window.location = (""+window.location).replace(/#[A-Za-z0-9_-]*$/,'')+"#scroll-js"
   }
    , 1);

}
}

submitButton.addEventListener("load", checkSpanContent());



//Email/phone validation 
const email = document.getElementById('email');
const phone = document.getElementById('phone_number');

let validationEmail = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
let validationPhoneUk = /^\d{11}$/;

const error = document.getElementById('messageText');

function validationEmailPhone() {
  if (email.value.match(validationEmail) && phone.value.match(validationPhoneUk)) {
    console.log('Email/Phone correct');
    return true;
  } else if (!email.value.match(validationEmail)) {
    console.log('error with email');
    error.innerHTML = 'Please check your email';
    email.style.border = "1px red solid";
    return false;
  } else if (!phone.value.match(validationPhoneUk)) {
    console.log('error with phone');
    error.innerHTML = 'Please check your phone';
    phone.style.border = "1px red solid";
    return false;
  }
}

