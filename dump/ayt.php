<!DOCTYPE html>
<html>
<head>
<title>ass</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="http://i.imgur.com/K4YYttf.gif">

<meta name="description" content="some random website from the mind of a fifteen year old">
<meta name="keywords" content="Chiaski,Chiaski.com">
<meta name="author" content="chia amisola">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,800italic,800,700italic,700,600italic,600' rel='stylesheet' type='text/css'>
<script src="http://chiaski.com/jquery.js" type="text/javascript"></script>
<script src="http://chiaski.com/jquery-ui.js" type="text/javascript"></script>

<script>

$(document).ready(function() {	

	//select all the a tag with name equal to modal
	$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		//Get the A tag
		var id = $(this).attr('href');
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set height and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 
	
	});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		$('#mask, .window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			
	
});

</script>
<link rel="stylesheet" type="text/css" href="http://chiaski.com/shakeitthefuckup.css">
<style type="text/css">
body{
font-family:'dotum';
background-color:#fff;
}

#bottom{
position:absolute;
overflow:hidden;
background-color:#CCCCCC;
width:100%;
left:0px;
border-top:4px solid #E8E8E8;
bottom:0px;
height:40px;
}

#time{
float:right;
margin-right:20px;
border:3px inset #E8E8E8;
position:relative;
padding:3px;
margin-top:5px;
width:50px;
text-align:center;
}

#start{
float:left;
margin-top:4px;
margin-left:50px;
height:32px;
width:80px;
position:absolute;
background-image:url(http://i.imgur.com/jyBKquM.png);
}

#start:hover{
background-image:url(http://i.imgur.com/c8G8Pt5.png);
}

#chiaski{
width:700px;
height:470px;
background-color:#DEDEDE;
border:3px double #fff;
border-radius:20px;
position:relative;
left:50%;
margin-left:-350px;
top:100px;
}

#icons{position:absolute;}

#header{
position:fixed;
width:500px;
left:50%;
margin-left:-250px;
text-align:center;
top:15px;
z-index:9;
}

h1{
font-family: 'Open Sans', sans-serif;
font-weight:500;
margin-left:1px;
margin-bottom:-5px;
margin-top:0px;
text-align:left;
font-style:italic;
}

h3{
font-size:12px;
margin:0px;
font-weight:100;
text-align:left;
}

#header a{
color:#EDB7B7;
margin-top:4px;
display:inline-block;
background-color:#fff;
padding:2px;
}

#header a:hover{
color:#A5D1D4;
}

#parent{
top:0px;
left:0px;
position:absolute;
width:100%;
height:100%;
overflow-y:scroll;
}



#one{
width:100%;
height:100%;
}

#second{
position:relative;
width:100%;
height:100%;
background-color:#EDB7B7;
text-align:center;
}

#third{
position:relative;
width:100%;
height:100%;
background-color:#a4ced8;
text-align:center;
}

#fourth{
position:relative;
width:100%;
height:100%;
background-color:#EDB7B7;
text-align:center;
}

#fifth{
position:relative;
width:100%;
height:100%;
background-color:#a4ced8;
text-align:center;
}
.portfolio{
width:500px;
height:300px;
top:0;
bottom: 0;
left: 0;
right: 0;
margin: auto;
position:absolute;
}

.dump{
width:500px;
height:300px;
top:0;
bottom: 0;
left: 0;
right: 0;
margin: auto;
position:absolute;
line-height:300px;
}

.dump a{
color:#fff;
font-weight:700;
}

.dump a:hover{
font-weight:300;
}

.fucko{
color:#fff;
font-family: 'Open Sans', sans-serif;
font-weight:700;
width:500px;
border:10px solid #fff;
padding:20px;
font-size:48px;
position:relative;
left:50%;
margin-left:-270px;
top:40%;
height:90px;
line-height:90px;text-shadow: 5px 8px 0 #df9c9c;-webkit-box-shadow: 5px 7px 0 0 #df9c9c;
box-shadow: 5px 7px 0 0 #df9c9c;
}

#verticalcenter{
height:700px;
position: absolute;
top:0;
bottom: 0;
left: 0;
right: 0;
	
margin: auto;
}


.contact{
position:absolute;
top:0;
bottom: 0;
left: 0;
right: 0;
margin: auto;
width:600px;
height:300px;
background-color:#fff;
}

.contact h1{
color:#c0dee6;
font-family: 'Open Sans', sans-serif;
font-weight:700;
border:10px solid #c0dee6;
font-size:32px;
position:relative;
text-align:center;
display:inline-block;
width:400px;
margin-top:30px;
margin-bottom:10px;
}

.contactlinks a{
text-decoration:none;
font-family:'open sans', sans-serif;
text-transform:lowercase;
display:inline-block;
color:#858585;
border:3px double #8fbecb;
width:150px;
padding:2px;
margin:2px;
text-align:center;
-webkit-transition: all 0.4s linear;
-moz-transition: all 0.4s linear;
-ms-transition: all 0.4s linear;
-o-transition: all 0.4s linear;
transition: all 0.4s linear;
float:left;
}

.contactlinks a:hover{border:3px double #df9d9d;}

.contactlinks{width:550px;margin-left:50px;padding:10px;}

.contactusername{
background-color:#8fbec8;
color:#fff;
display:inline-block;
width:300px;
font-family:'open sans',sans-serif;
border-radius:3px;
padding:3px;
margin-top:20px;
}

/* Z-index of #mask must lower than #boxes .window */
#mask {
  position:absolute;
  z-index:99;
  background-color:#000;
  display:none;
left:0px;
top:0px;
overflow:none;
}
  
#boxes .window {
  position:fixed;
left:0px;
top:0px;
  display:none;
  z-index:9999;
background-color:#fff;
}


/* Customize your modal window here, you can add background image too */
#boxes #dialog {
width:700px;
height:600px;
}

#dialog img{
float:left;
}

#dialog p{
font-family:'comic sans ms';
font-size:48px;
text-align:center;
color:red;
}

.passion{
margin:-10px;
font-family:'comic sans ms';
font-size:63px;
color:blue;
font-weight:700;
text-align:center;
}

</style>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    m = checkTime(m);
    document.getElementById('time').innerHTML =
    h + ":" + m;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
<script type="text/javascript"><!--
$(document).ready(function() {
  // sets draggable the elements with id="im"
  $('#icons, #iconstwo').draggable({
    cursor: 'move',        // sets the cursor apperance
    containment: '#chiaski'    // sets to can be dragged only within "#drg" element
  });

  // sets draggable the paragraph inside #prt
  $('#prt img').draggable({
    cursor: 'move',
    containment: 'parent'      // sets to can be dragged only within its parent
  });
});
--></script>

</head>
<body onload="startTime()">
<div id="boxes">
	<!-- #customize your modal window here -->
	<div id="dialog" class="window">
<img src="http://i.imgur.com/RgUmczJ.png" align="left" /><br />
<p>HELLO I AM CHIA AND GRAPHIC DESIGN IS my <div class="passion"><div class="shake-crazy shake-constant shake-constant--hover">pAsSiOn!!</div></div></p> 
		<br /><br />
<aside>(that is m eon the left)<br />
btdubz; click anywqehere otuside this box 2 close</aside>
	</div>

	<!-- Do not remove div#mask, because you'll need it to fill the whole screen -->	
 	<div id="mask"></div>
</div>
<div id="parent">

<div id="one">

<div id="verticalcenter">
<div id="header">
<h1>pew pew</h1>
<h3>my name is chia and this is a website !!</h3>
<a href="#second">blog</a>
<a href="#third">contact</a>
<a href="#dialog" name="modal">abt</a>
<a href="#fourth">portfolio</a>
<a href="#fifth">dump</a>
</div>
<div id="chiaski">
<div id="icons"><a href="#"><img src="http://33.media.tumblr.com/tumblr_ma6usrGTIY1qid2nw.gif" /></a></div>
<div id="bottom">
<div id="start"><a href="#"></a></div>
<div id="time"></div>
</div>
</div>
</div>
</div>



<div id="second">
<div class="fucko">bloge coming soon</div>
(its actually ready but im shy)
</div>

<div id="third">
<div class="contact"><center><h1>find me.</h1></center>
<div class="contactlinks">
<a href="#" target="_blank" class="contacttwitter">twittur</a>
<a href="#" class="contacttumblr">tomblr</a>
<a href="#" target="_blank" class="contactyoutube">youtoob</a>
<a href="#" target="_blank" class="contactsteam">steam</a>
<a href="#" target="_blank" class="contactosu">osu</a>
<a href="#" target="_blank" class="contactmal">myanimelist</a>
<a href="#" target="_blank" class="contactschoolidol">schoolidol</a>
<a href="#" class="contactgarena">garena</a>
<a href="#" target="_blank" class="contact8tracks">8tracks</a>
</div>
<script type="text/javascript">
$(document).ready(function()
    {
    $(".contacttwitter").hover(
      function () {
         $(".contactusername").text("doujinshl");
        },
        function () {
         $(".contactusername").text("username");
        }
        );
    });

$(document).ready(function()
    {
    $(".contacttumblr").hover(
      function () {
         $(".contactusername").text("frel");
        },
        function () {
         $(".contactusername").text("username");
        }
        );
    });


$(document).ready(function()
    {
    $(".contactyoutube").hover(
      function () {
         $(".contactusername").text("chiaski");
        },
        function () {
         $(".contactusername").text("username");
        }
        );
    });

$(document).ready(function()
    {
    $(".contactsteam").hover(
      function () {
         $(".contactusername").text("pekoyama");
        },
        function () {
         $(".contactusername").text("username");
        }
        );
    });

$(document).ready(function()
    {
    $(".contactosu").hover(
      function () {
         $(".contactusername").text("chiaski");
        },
        function () {
         $(".contactusername").text("username");
        }
        );
    });

$(document).ready(function()
    {
    $(".contactmal").hover(
      function () {
         $(".contactusername").text("lux");
        },
        function () {
         $(".contactusername").text("username");
        }
        );
    });

$(document).ready(function()
    {
    $(".contactschoolidol").hover(
      function () {
         $(".contactusername").text("chisaki");
        },
        function () {
         $(".contactusername").text("username");
        }
        );
    });

$(document).ready(function()
    {
    $(".contactgarena").hover(
      function () {
         $(".contactusername").text("chiaski");
        },
        function () {
         $(".contactusername").text("username");
        }
        );
    });

$(document).ready(function()
    {
    $(".contact8tracks").hover(
      function () {
         $(".contactusername").text("crownguard");
        },
        function () {
         $(".contactusername").text("username");
        }
        );
    });
</script>
<center>
<div class="contactusername">text</div>
</center>
</div>
</div>

<div id="fourth">
<div class="portfolio">i have made nothing. <br />jk itz coming soon i thikn</div>
</div>


<div id="fifth">
<div class="dump"><a href="http://chiaski.com/dump/">enter the wasteland of testing and stuff</a></div>
</div>


  <script>
jQuery('a[href^="#"]').click(function(e) {
 
    jQuery('html, body, #parent').animate({ scrollTop: jQuery(this.hash).offset().top}, 1000);
 
    return false;
 
    e.preventDefault();
 
});

    </script>
</body>
</html>