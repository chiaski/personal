<!DOCTYPE html>
<html>
<head>
<script src="http://chiaski.com/src/cookie.js"></script>
<script src="http://chiaski.com/jquery.js"></script>
<script>


function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

    function f()
    {
		alert("Shit changed!");
		checkCookie();
    } 
	
function checkCookie() {
    var user=getCookie("username");
    if (user != "") {
		document.getElementById('wrapper').style.display = "none";
        alert("Hello " + user);
    } else {
	//   alert(testingvalue);
     //  user = prompt("Please");
	//   
        user = document.getElementById("txt_name").value;
       if (user != "" && user != null) {
           setCookie("username", user, 30);
       }
    }
}


</script>
<script>
jQuery(function(){
    $("#txt_name").keyup(function() {
      var user = $("#txt_name").val(); 
      $("#myDiv").text(user);
    });
});
</script>
</head>
<body onload="checkCookie()">
<div id='wrapper'>
  <fieldset>
    <input id="txt_name" type="text" value="" onchange="f()" />
  </fieldset>
</form>
<div id="myDiv"></div>
</div>
</body>
</html>
