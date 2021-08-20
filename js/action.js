function action(){
    const tl = gsap.timeline();
    tl.to('#container', {duration:1, opacity: 0, display:"none"});
    tl.to('#loadingContainer', {delay:1, duration:0.5, opacity:1, display:"flex"});
    setTimeout(function () {document.getElementById("loadText").innerHTML = "STARTING MYFRUITS."}, 2000);
    setTimeout(function () {document.getElementById("loadText").innerHTML = "STARTING MYFRUITS.."}, 2400);
    setTimeout(function () {document.getElementById("loadText").innerHTML = "STARTING MYFRUITS..."}, 2800);
    setTimeout(function () {document.getElementById("loadText").innerHTML = "STARTING MYFRUITS."}, 3200);
    setTimeout(function () {document.getElementById("loadText").innerHTML = "STARTING MYFRUITS.."}, 3600);
    setTimeout(function () {document.getElementById("loadText").innerHTML = "STARTING MYFRUITS..."}, 4000);
    setTimeout(function () {window.location.href = "./html/main.html";}, 5000);
}