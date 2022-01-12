/*MAS INFO*/
const firstQA = document.getElementById("band-1");
const btnMoreInfo = document.getElementById("btn-more-info");

function goToFirstQA(){
    firstQA.scrollIntoView({behavior:"smooth"});
};

btnMoreInfo.addEventListener("click", goToFirstQA);

/*VISITANOS LINK*/

var visitanosDiv = document.getElementById("visitanos-link");

function openLocMap(){
    window.open("https://goo.gl/maps/hw2f3ZNVi3duEDWp6");
};

visitanosDiv.addEventListener("click", openLocMap);