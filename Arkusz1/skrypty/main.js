function displayImage(element){
    container = document.querySelector("#image-container");
    if(!!element) container.src = element.src;
}
var g_heartActive = true;
function swapHeart(heart){
    if(!!heart){
        if(g_heartActive){
            heart.src = heart.currentSrc.split("icon-on.png")[0] + "icon-off.png";
        }
        else{
            heart.src = heart.currentSrc.split("icon-off.png")[0] + "icon-on.png";
        }
        g_heartActive = !g_heartActive;
    }
}