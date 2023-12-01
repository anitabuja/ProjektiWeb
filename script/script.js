
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


function validateForm(){
  var name=document.getElementById('name').value;
  var email=document.getElementById('email').value;
  var psw=document.getElementById('psw').value;
  var pswRepeat=document.getElementById('pswRepeat').value;


  
  var nameRegex = /^[a-zA-Z\s]+$/;
  if(!nameRegex.test(name)){
      alert('please enter a valid name.');
      return false;
  }

  var emailRegex = /^[^\s@]+@[^\s@]\.[^\s@]+$/;
  if(!emailRegex.test(email)){
      alert('please enter a valid email.');
      return false;
  }

  if(psw.length <6){
      alert('pasword must be at least 6 characters');
      return false;
  }
  if(psw !== pswRepeat){
      alert('paswords do not match');
      return false;
  }
  return true;
}
