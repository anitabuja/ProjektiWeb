
function validimiLogin() {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

     if (email === "" || password === "") {
        alert("Ju lutem plotesoni te dhenat");
        return false; 
    }
    return true;
}

let slideIndex = 1; 

showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex = slideIndex + n); 
}

function currentSlide(n) {  
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide_img");

  if (n > slides.length) {slideIndex = 1} 
  
  if (n < 1) {slideIndex = slides.length} 
  
  for (i = 0; i < slides.length; i++) {
  
    slides[i].style.display = "none";  
    
  }

  slides[slideIndex-1].style.display = "block";  
}
function validimiRegister(){

const name = document.getElementById("name").value;
const email = document.getElementById("email").value;
const phone = document.getElementById("phone").value;
const password = document.getElementById("password").value;

if(name === ""){
  alert("Ju lutem vendosni emri tuaj");
  return false;
}

if(email==="" || !email.includes("@")){
  alert("Ju lutem vendosni nje email valide");
  return false;
}

if(phone===|"" || isNaN(phone)){
  alert("ju lutem vendosni nje numer telefoni valid");
  return false;
}

if(password=== ""){
  alert("ju lutem vendosni nje pasword valid");
  return false;
}
return true;
}