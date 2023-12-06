
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

// console.log("Hello")
let NameRegex = /^[A-Z][a-z]{3,8}$/;
let EmailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;

function validimiRegister() {

  const name = document.getElementById("name").value;
  const nameError = document.getElementById("nameerror");

  const email = document.getElementById("email").value;
  const emailError = document.getElementById("emailerror");

  const phone = document.getElementById("phone").value;
  const phoneError = document.getElementById("phoneerror");

  const password = document.getElementById("password").value;
  const passwordError = document.getElementById("passworderror");

  nameError.innerText = '';
  emailError.innerText = '';
  phoneError.innerText = '';
  passwordError.innerText = '';

  if(!NameRegex.test(name) || name === ''){
    nameError.innerText = 'Invalid name';
    return;
  }

  nameError.innerText = '';
  emailError.innerText = '';
  phoneError.innerText = '';
  passwordError.innerText = '';



}
// console.log("Helolo");


