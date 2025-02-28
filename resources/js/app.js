import "./bootstrap";
// import "animate.css";
import "flowbite";

import Alpine from "alpinejs";
import.meta.glob(["../images/**", "../fonts/**"]);
window.Alpine = Alpine;

Alpine.start();

let currentIndex = 0;
const slides = document.querySelectorAll(".carousel-open");
const totalSlides = slides.length;

// Function to go to the next slide
function nextSlide() {
    // Uncheck the current slide
    slides[currentIndex].checked = false;

    // Increment index and loop back to the start if at the last slide
    currentIndex = (currentIndex + 1) % totalSlides;

    // Check the next slide
    slides[currentIndex].checked = true;
}

// Set the interval to change the slide every 3 seconds (3000ms)
setInterval(nextSlide, 4000);

function openAnsSection(val) {
    var p = document.getElementById("para" + val);
    var svg = document.getElementById("path" + val);

    if (p.classList.contains("hidden")) {
        p.classList.remove("hidden");
        p.classList.add("block");
    } else {
        p.classList.remove("block");
        p.classList.add("hidden");
    }

    if (svg.classList.contains("hidden")) {
        svg.classList.remove("hidden");
        svg.classList.add("block");
    } else {
        svg.classList.remove("block");
        svg.classList.add("hidden");
    }
}
