//updating the copyright year
(function(){
	const currentYear = document.querySelector(".year" );

	let thisYear = new Date();
	let newYear = thisYear.getFullYear();

	currentYear.textContent = newYear ;
	currentYear.innerText = newYear;
}());

//POP UP GALLERY IMAGE
$(function() {
      $("#portfolio").magnificPopup({
          delegate: 'a', // child items selector, by clicking on it popup will open
          type: 'image',
          gallery: {
              enabled: true
          }
      });
});

//toggling an active state on the menu links
$(document).on('click', 'ul li', function(){
	$(this).addClass('active').siblings().removeClass('active');
});
//toggling the current link state
const menuHover = document.querySelector('ul');
const currentLi = document.querySelector('.at-page');

menuHover.addEventListener('mouseover', ()=>{
	currentLi.classList.remove('at-page');
});

menuHover.addEventListener('mouseout', ()=>{
	currentLi.classList.add('at-page');
});

//Navbra button hover state
const navAnchors = document.querySelectorAll(".nav-item .nav-link");
const navBtn = document.querySelectorAll(".nav-item .nav-link button");

navAnchors.forEach(item => {
	let childItem = item.children[0];

	childItem.style.transition = "all 0.7s ease-in-out";

	item.addEventListener("mouseover", function(){
		childItem.classList.add("btn-hover");
	});

	item.addEventListener("mouseout", function(){
		childItem.classList.remove("btn-hover");
	})

});

//console.log(navAnchors)
/* =============================================================== */
/* ========================= ACCORDIONS ============================= */
/* ===============================================================
const btns = document.querySelectorAll('.view');
const cntDiv = document.querySelectorAll('#rooms .content');
const btnLng = btns.length;
let stats = false;


 btns.forEach((btn) => {
	btn.addEventListener("click", function(){
	let parElm = this.parentElement.previousElementSibling;

    for(let i = 0 ; i < cntDiv.length ; i++){
      if(cntDiv[i] != parElm){
        cntDiv[i].classList.add("closed");
      }else {
        parElm.classList.toggle("closed");
      }
    }
		toggleBtnText(btn);
	})
});

function toggleBtnText(btn){
  let parElm = btn.parentElement.previousElementSibling;

  for(let i= 0 ; i<btnLng ; i++){
    if(btns[i] != btn){
    btns[i].innerHTML = "View More";
    }else{
        if(parElm.className == "centerfy content"){
          btn.textContent = "View Less";
          stats = true;
        }else if(parElm.className == "centerfy content closed"){
          btn.textContent = "View More";
          stats = false;
        }
    }
  }
}
 ========================================================*/
/* ========================================================
 ========================================================*/
const imgWrapper = document.querySelectorAll("#display .img-wrapper");

imgWrapper.forEach( item => {
	item.addEventListener("mouseover", function(){
		let img = item.childNodes[1];
		let overlay = item.childNodes[3];

		overlay.style.transition = "all 2.5s ease-in-out";
		overlay.style.display = "flex";

		img.classList.add("img-borders");
	})
});

imgWrapper.forEach( item => {
	item.addEventListener("mouseout", function(){
		let img = item.childNodes[1];
		let overlay = item.childNodes[3];

		overlay.style.transition = "all 2.5s ease-in-out";
		overlay.style.display = "none";

		img.classList.remove("img-borders");
	})
});



/* =======================================================
		SCROLL TO UP FUNCTIONALITY
======================================================== */
const topIcon = document.querySelector(".move-up-icon");
const colors = ["#ff9800" ,"#000000", "#d23b3b"];

const randyColor = () => colors[Math.floor(Math.random()*colors.length)];

//SCROLL EFFECT
window.addEventListener("scroll", ()=>{
	const showIcon = () => topIcon.style.display = "block" ;
	const hideIcon = () => topIcon.style.display = "none" ;

	window.scrollY >= 629 ? showIcon() : hideIcon() ;
});

setInterval(()=> topIcon.style.border = `5px solid ${randyColor()}`, 2000);
/*=======================================================
		HAMBURGER ANIMATIONS
======================================================== */
const hamburger = document.querySelector("#hamburger");
const line1 = document.querySelector("#hamburger #line1");
const line2 = document.querySelector("#hamburger #line2");
const line3 = document.querySelector("#hamburger #line3");

hamburger.addEventListener("click", function(){
	line1.classList.toggle("style1");
	line2.classList.toggle("style2");
	line3.classList.toggle("style3");
});