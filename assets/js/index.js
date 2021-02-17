const el = document.querySelector(".projects-carousel-container")

let width = el.clientWidth
let height = el.clientHeight

// sample slider with display none/block
// var slideIndex = 1;
// showDivs(slideIndex);

// function plusDivs(n) {
//   showDivs(slideIndex += n);
// }

// function showDivs(n) {
//   var i;
//   var x = document.getElementsByClassName("slide");
//   if (n > x.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = x.length}
//   for (i = 0; i < x.length; i++) {
//     x[i].style.display = "none";
//   }

//   x[slideIndex-1].style.display = "block";

// }

let slides = document.querySelectorAll(".slide")
let slider = document.querySelector(".projects-carousel-slice")
let slideContainerWidth = 0

//width of the slide (all are the same width)
let slideWidth = slides[0].offsetWidth

slides.forEach(element => {
    slideContainerWidth += element.offsetWidth
});

slider.style.width = slideContainerWidth + 6*66 + "px"
slider.style.transform = "translate3d(-" + slideWidth + "px, 0, 0)";


// slider function --> sneek peek projects
function slide() {
    let nextBtn = document.querySelector(".right-button")
    let backBtn = document.querySelector(".left-button")
    let desktopMargin = 66
    var slideCounter = 1

    let currentPosition = slideWidth + desktopMargin

    nextBtn.addEventListener("click", function() {
        slider.style.transition = ".5s";
        currentPosition += slideWidth + desktopMargin
        // slider.style.transform = "translate3d(-" + 2 * slideWidth + "px, 0, 0)"
        slider.style.transform = "translate3d(-" + currentPosition + "px, 0, 0)"
        if(slideCounter > 3) {
            slider.style.transition = "0s"
            currentPosition = 2 * slideWidth + 66
            slider.style.transform = "translate3d(-" + currentPosition +  "px, 0, 0)"
            slideCounter = 2
        }
        else {
            slideCounter++
        }
    })

    backBtn.addEventListener("click", function() {
        currentPosition -= slideWidth + desktopMargin
        slider.style.transform = "translate3d(-" + currentPosition + "px, 0, 0)";
        slideCounter--
    })
}

slide();