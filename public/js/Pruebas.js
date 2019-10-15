
var scrollPos = 0;
window.addEventListener('scroll',function(event){
    if ((document.body.getBoundingClientRect()).top > scrollPos){
      console.log("Arriba");
  	}else{
      console.log("Abajo");
    }
    scrollPos = (document.body.getBoundingClientRect()).top;
});
function rolar(){
  document.getElementById("logo1").scrollIntoView({  behavior: 'smooth' });
}
