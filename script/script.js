
function validimiLogin() {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

     if (email === "" || password === "") {
        alert("Ju lutem plotesoni te dhenat");
        return false; 
    }
    return true;
}

const nameRegex = /^[a-zA-Z\s]+$/;
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const phoneRegex = /^(044|045|046|049|048|043)\d{5}\d$/;
const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; 

function validateInput(fieldId, regex, errorId) {
  const fieldValue = document.getElementById(fieldId).value;
  const errorElement = document.getElementById(errorId);

  errorElement.innerText = '';

  if (!regex.test(fieldValue) || fieldValue === '') {
    errorElement.innerText = `Invalid ${fieldId}`;
  }
}

function validimiRegister() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const phone = document.getElementById("phone").value;
  const password = document.getElementById("password").value;


  if (!nameRegex.test(name) || name === '') {
    document.getElementById("nameerror").innerText = 'Invalid name';
    return false;
  }

  if (!emailRegex.test(email) || email === '') {
    document.getElementById("emailerror").innerText = 'Invalid email';
    return false;
  }

  

  if (!passwordRegex.test(password) || password === '') {
    document.getElementById("passworderror").innerText = 'Invalid password';
    return false;
  }

  return true;
}

//------------------------------------------------------------------------------ SLIDERRRRRRRRRRRRRRRRRRRR
let slideIndex = 1; 

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide_img");

  if (slides.length === 0) { 
    return;
  }

  if (n > slides.length) {slideIndex = 1} 
  
  if (n < 1) {slideIndex = slides.length} 
  
  for (i = 0; i < slides.length; i++) {
  
    slides[i].style.display = "none";  
    
  }

   slides[slideIndex-1].style.display = "block";  
 }


 showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex = slideIndex + n); 
}

function currentSlide(n) {  
  showSlides(slideIndex = n);
}

