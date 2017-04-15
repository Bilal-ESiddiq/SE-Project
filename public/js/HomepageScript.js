var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-blue-grey", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-blue-grey";
}
// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();


function openRightMenu() {
    document.getElementById("rightMenu").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function closeRightMenu() {
    document.getElementById("rightMenu").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
function signup() {
	closeRightMenu();
  document.getElementById("signupmodal").style.display = "block";
}
function initialise(){
  document.getElementById('signupmodal').style.display='none';
}
