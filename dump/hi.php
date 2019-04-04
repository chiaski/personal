
<!DOCTYPE html>
<html>
<head>
<script src="http://chiaski.com/src/cookie.js"></script>
<script src="http://chiaski.com/jquery.js"></script>
<script type="text/javascript" src="http://chiaski.com/dump/t.js"></script>


<script>


function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires + "; path=/; domain=.chiaski.com";
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
		alert(">NAME SET");
$("input").prop('disabled', true);
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
      $("#enteredusername").text(user + "?");
    });
});
</script>
<style type="text/css">
body{
background-color:black;}

#wrapper{
position:absolute;
padding:2em;
width:500px;
left:50%;
margin-left:-250px;

}

input{
border:1px solid white;
display:inline;
width:300px;
height:25px;
line-height:25px;
font-family:'courier new';
color:black;
font-size:18px;
text-align:center;
text-shadow:-1px 2px 0px #BABABA;
}

#txt_name{z-index:9999;}
::selection{background:black;color:white;}
::-webkit-selection{background:black;color:white;}
::-moz-selection{background:black;color:white;}


*{
margin:0;
padding:0;
outline:0;
border:0;
cursor:default;
webkit-tap-highlight-color:rgba(0,0,0,0);
color:white;
font-family:vt323,monospace;
font-size:25px;
line-height:21px;
text-shadow:-1px 2px 0px #1d1d1d;
}


section{
position:absolute;
top:15%;
left:50%;
width:400px;
margin-left:-200px;
}

#enteredusername{display:inline;font-style:italic;}


pre{padding:5px;width:300px;opacity:.9;}


del{text-decoration:none;}


.blue{background:blue;color:white;}

.btn,button{padding:5px;background:black;color:white;}
.btn{text-decoration:none;}

mark{background-color:#F2D48D;padding:1px;}

a{text-decoration:none;display:block;background-color:yellow;color:black;}
</style>
</head>
<body onload="checkCookie()">
<div id='wrapper'>
<center>

<section><br /><br /><br /><br />
Hello.<br />
Enter your name.
</section><br /><br /><br /><br /><br /><br /><br />
    <input id="txt_name" type="text" value="" onchange="f()" />
<br /><br />
<div id="enteredusername"></div><br />
<mark style="font-size:11px;line-height:-15px;background-color:#404040;">Clicking out of the box finalizes your name.
<br />You can change it anytime.</mark><br /><br />
<a href="http://chiaski.com/dump/chaptertest.php">> Proceed</a>
</center>
</div>
</body>
</html>
