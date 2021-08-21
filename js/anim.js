function actionLoad(){
    const tl = gsap.timeline();
    tl.to(".box", {duration: 1, opacity:0, display:"none"});
    tl.to(".loadingScreen", {duration: 1, opacity: 1, display:"flex"});
    setTimeout(function () {document.getElementById("text").innerHTML = "LOADING MYFRUITS.";}, 2000);
    setTimeout(function () {document.getElementById("text").innerHTML = "LOADING MYFRUITS..";}, 2200);
    setTimeout(function () {document.getElementById("text").innerHTML = "LOADING MYFRUITS...";}, 2400);
    setTimeout(function () {document.getElementById("text").innerHTML = "LOADING MYFRUITS.";}, 2600);
    setTimeout(function () {document.getElementById("text").innerHTML = "LOADING MYFRUITS..";}, 2800);
    setTimeout(function () {document.getElementById("text").innerHTML = "LOADING MYFRUITS...";}, 3000);
    setTimeout(function () {document.getElementById("text").innerHTML = "LOADING MYFRUITS.";}, 3200);
    setTimeout(function () {document.getElementById("text").innerHTML = "LOADING MYFRUITS..";}, 3600);
    setTimeout(function () {document.getElementById("text").innerHTML = "LOADING MYFRUITS...";}, 4000);
    setTimeout(function () {window.location.href = "./html/main.html"}, 4000);
}