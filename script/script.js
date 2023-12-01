
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