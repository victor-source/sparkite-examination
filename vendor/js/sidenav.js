	
	
function myFunction(x) {
  if (x.matches) { // If media query matches
    document.getElementById("main").style.marginLeft= "70px";
	document.getElementById("mySidenav").style.width = "70px";
	document.getElementById("top-dash").style.marginLeft= "71px";
	document.getElementById("first-d").style.marginLeft= "71px";

	  document.getElementById("p1").style.display="none";
        document.getElementById("l1").style.display="none";
		document.getElementById("l2").style.display="none";
		document.getElementById("l3").style.display="none";
		document.getElementById("l4").style.display="none";
		document.getElementById("l5").style.display="none";
		document.getElementById("l6").style.display="none";
		document.getElementById("l7").style.display="none";
		document.getElementById("l8").style.display="none";
		document.getElementById("l9").style.display="none";
	 
  } else {
  document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("top-dash").style.marginLeft = "251px";
        document.getElementById("first-d").style.marginLeft = "251px";
        
		  document.getElementById("p1").style.display="none";
		  document.getElementById("p1").style.display="inline-block";
        document.getElementById("l1").style.display="inline-block";
		document.getElementById("l2").style.display="inline-block";
		document.getElementById("l3").style.display="inline-block";
		document.getElementById("l4").style.display="inline-block";
		document.getElementById("l5").style.display="inline-block";
		document.getElementById("l6").style.display="inline-block";
		document.getElementById("l7").style.display="inline-block";
		document.getElementById("l8").style.display="inline-block";
		document.getElementById("l9").style.display="inline-block";

  }
}

var x = window.matchMedia("(max-width: 780px)")
myFunction(x)
x.addListener(myFunction) 


       
	document.getElementById("myBtn").addEventListener("click", toggleNav);




function toggleNav(){
    navSize = document.getElementById("mySidenav").style.width;
    if(navSize=="250px") {
        return close();
    }
	
    return open();
	
}
function open() {		
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("top-dash").style.marginLeft = "251px";
        document.getElementById("first-d").style.marginLeft = "251px";
        
		  document.getElementById("p1").style.display="none";
		  document.getElementById("p1").style.display="inline-block";
        document.getElementById("l1").style.display="inline-block";
		document.getElementById("l2").style.display="inline-block";
		document.getElementById("l3").style.display="inline-block";
		document.getElementById("l4").style.display="inline-block";
		document.getElementById("l5").style.display="inline-block";
		document.getElementById("l6").style.display="inline-block";
		document.getElementById("l7").style.display="inline-block";
		document.getElementById("l8").style.display="inline-block";
		document.getElementById("l9").style.display="inline-block";
		
}
function close() {
		
         document.getElementById("mySidenav").style.width = "70px";
        document.getElementById("main").style.marginLeft = "70px";
         document.getElementById("top-dash").style.marginLeft = "71px";
          document.getElementById("first-d").style.marginLeft = "71px";

        document.getElementById("p1").style.display="none";
        document.getElementById("l1").style.display="none";
		document.getElementById("l2").style.display="none";
		document.getElementById("l3").style.display="none";
		document.getElementById("l4").style.display="none";
		document.getElementById("l5").style.display="none";
		document.getElementById("l6").style.display="none";
		document.getElementById("l7").style.display="none";
		document.getElementById("l8").style.display="none";
		document.getElementById("l9").style.display="none";
		
		
		
}
