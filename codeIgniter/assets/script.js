$(function(){
	   function cekCookie(cookie){
		 var cookieString = cookie.split("="),
		 	 name = cookieString[0];

		 if(name.indexOf("visited") !== -1){
		 	return true
		 }
	   }

	    if( document.cookie == "" ){
	        // Your code here
		    document.cookie = "visited=yes; path=/"
		    $("#login").fadeOut(100).delay(700).fadeIn("slow");
	    }
});