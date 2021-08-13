var $menuWidth = 192;
var $open = true;
function menu(){
    if ($open == true){
        console.log("Menu opened");
        gsap.to('#menuExpand', {left:1855 - $menuWidth});
        $open = false;
    }
    else if($open == false){
        console.log("Menu closed");
        gsap.to('#menuExpand', {left:1855+$menuWidth});
        $open = true;
    }
}

function fillEnt(){
    gsap.to(document.querySelector("#art"), {duration:0.7, fill:"#E21C41"});
}

function fillLea(){
    gsap.to(document.querySelector("#art"), {duration:0.7, fill:"white"});
}