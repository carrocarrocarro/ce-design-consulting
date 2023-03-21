/****** Menu ******/
let menu = document.querySelector(".nav");
let menuIcon = document.querySelector(".nav-toggle");
let body = document.body;
let subMenu = document.querySelector(".sub-menu");

menuIcon.addEventListener("click", function(){

    console.log('clicked');
    
    menuIcon.classList.toggle("toggle-nav");
    body.classList.toggle("show-nav");
    /* toggleBodyScroll(); */

});

const faders=document.querySelectorAll(".fade-in"),slidersLeft=document.querySelectorAll(".slide-in-left"),appearOptions={},appearOnScroll=new IntersectionObserver((function(e,o){e.forEach((e=>{e.isIntersecting&&(e.target.classList.add("inview"),o.unobserve(e.target))}))}),appearOptions);faders.forEach((e=>{appearOnScroll.observe(e)})),slidersLeft.forEach((e=>{appearOnScroll.observe(e)}));

