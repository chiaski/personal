<!DOCTYPE html>
<html>
<head>
<title>ass</title>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,800italic,800,700italic,700,600italic,600' rel='stylesheet' type='text/css'>
<script src="http://chiaski.com/jquery.js" type="text/javascript"></script>
<script src="http://chiaski.com/jquery-ui.js" type="text/javascript"></script>
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
width:600px;
height:600px;
background-color:#DEDEDE;
border:3px double #fff;
border-radius:20px;
position:relative;
left:50%;
margin-left:-300px;
top:100px;
}

#icons{position:absolute;}

#header{
position:absolute;
width:500px;
left:50%;
margin-left:-250px;
text-align:center;
top:15px;
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
background-color:#000;
width:100%;
height:100%;
}

#second{
position:relative;
width:100%;
height:100%;
background-color:#fff;
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
<script type="text/javascript">
$('a[href^="#"]').on('click', function(event) {
    var target = $(this.href);
    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});
</script>
</head>
<body onload="startTime()">
<div id="parent">
<div id="one">

<div id="header">
<h1>hello.</h1>
<h3>my name is chia and this is a website !!</h3>
<a href="#second">blog</a>
<a href="#">contact</a>
<a href="#">abt</a>
<a href="#">portfolio</a>
<a href="#">wip</a>
<a href="#">dump</a>
</div>
<div id="chiaski">
<div id="icons"><a href="#"><img src="http://31.media.tumblr.com/d174768abe1573f7054dabf527225adf/tumblr_inline_mg2m3b4PMF1qdlkyg.gif" /></a></div>
<div id="bottom">
<div id="start"><a href="#"></a></div>
<div id="time"></div>
</div>
</div>
</div>



<div id="second"><a name="second"></a>test</div>



</div>
</body>
</html>