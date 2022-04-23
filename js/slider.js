// myPerso()



// function myPerso() {

//     setTimeout(() => {document.getElementById("slider1").style.display = "flex";document.getElementById("slider2").style.display = "none"; document.getElementById("slider3").style.display = "none"; }, 0);
//     setTimeout(() => {document.getElementById("slider1").style.display = "none";document.getElementById("slider2").style.display = "flex"; document.getElementById("slider3").style.display = "none";}, 10000);
//     setTimeout(() => {document.getElementById("slider1").style.display = "none";document.getElementById("slider2").style.display = "none"; document.getElementById("slider3").style.display = "flex"; }, 20000);
// }

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    

  slides[slideIndex-1].style.display = "flex";  
  setTimeout(showSlides, 10000);
}