var marginY=0;
var destinstion=0;
var speed=0;
var scroller=null;
function initScroll(elementId){
    destination=document.getElementById(elementId).offsetTop;
   scroller=setTimeout(function(){
initScroll(elementId);
},1);
marginY=marginY+speed;
if(marginY>=destination){
clearTimeout(scroller);
}
window.scroll(0,marginY);
    console.log();
}