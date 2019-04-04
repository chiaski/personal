






<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>chia.exe</title>
	<link rel="shortcut icon" href="http://i.imgur.com/vfsQ9KR.gif">
    <script src="http://chiaski.com/jquery.js"></script>
    <script src="http://chiaski.com/src/typed.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<script>

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
</script>
<script>

  $(function(){
      $(".element").typed({
     strings: ["very gay.", "evil.", "very cute!", "a neopet.", "a little angel.", "a <s>weeaboo</s>.", "a small pale girl.", "a baby dinosaur.", "very emo.", "hestia.", "sleep-deprived. :(", "a trove lord.", "dope as fuck af.", "a very qt player!", "a bear cub.", "a chia.", "chisaki hiradaira.", "smol!", "a smol princess.", "a bic!", "the strongerst.", "my nyas? :3", "a chiaboo.", "matthew roque.", "saying hi to matthew", "hello matthew!", "CRYAN ROSS"],
		typeSpeed: 50,
			// time before typing starts
			startDelay: 100,
			// backspacing speed
			backSpeed: 50,
			// time before backspacing
			backDelay: 2500,
			// loop
			loop: true,
			// false = infinite
			loopCount: false,
			// show cursor
			showCursor: true,
      });
  });
</script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
  <script>
  $(function() {
    $( document ).tooltip({
      track: true
    });
  });
  </script>

<script>
$(function () {
    $("#showmenu").click(function (e) {
        $("#u, #container").fadeIn();
        return false;
    });
    $("#container").click(function() {
        $("#container").delay(800).fadeOut();
        $("#u").delay(500).fadeOut();
    });
});
</script>

<script>
$(function () {
    $("#showabout").click(function (e) {
        $("#c, #containertwo").fadeIn();
        return false;
    });
    $("#containertwo").click(function() {
        $("#containertwo").delay(800).fadeOut();
        $("#c").delay(500).fadeOut();
    });
});
</script>
  <script>
  $(function() {
    $( ".sugoii" ).sortable();
    $( ".sugoii" ).disableSelection();
  });
  </script>
<script language="JavaScript">
<!--
var r_text = new Array ();
r_text[0] = "murdering chocolate babies.";
r_text[1] = "yaoi smut kpop fanfiction.";
r_text[2] = "chocolate and cuddling.";
r_text[3] = "stuffed toys and bloodshed.";
r_text[4] = "tol white mama dinosaurs.";
r_text[5] = "flatopia because fakku sucks now.";
r_text[6] = "sneks.";
r_text[7] = "throwing children at other children.";
r_text[8] = "sir jose mari calamlam.";
r_text[9] = "gravity falls fanfiction.";
r_text[10] = "arson.";
r_text[10] = "sad old films";
var i = Math.floor(11*Math.random())


//-->
</script>
<style type="text/css">
  label {
    display: inline-block;
  }

  .ui-tooltip {
    color: black;
border:none;
font-family:courier new;
box-shadow:none;
padding:2px;
font-size:11px;
border-radius:0px;
  }

.typed-cursor{
    opacity: 1;
    -webkit-animation: blink 0.7s infinite;
    -moz-animation: blink 0.7s infinite;
    animation: blink 0.7s infinite;
}

@keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-webkit-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-moz-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

.element{display:inline-block;}


::-webkit-scrollbar{
    height:2px;
    width:4px;
    background:inherit;
}

::-webkit-scrollbar-thumb {
    background:#000;
    border-radius:2px;
    -webkit-border-radius:2px;
}


html{
font-family:courier new;
}

p{margin:auto;text-align:justify;font-size:14px;}

#f{
position:absolute;
width:300px;
margin:4em;
border-left:1px solid black;
padding:0.5em;
}


#u{
position:absolute;
padding:1em;
border:1px solid #1d1d1d;
margin:auto;
left:50%;
width:300px;
text-align:center;
margin-left:-150px;
background-color:#fff;
top:50%;
height:300px;
margin-top:-150px;
display:none;
}


#c{
position:absolute;
padding:1em;
border:1px solid #fff;
margin:auto;
left:50%;
width:300px;
text-align:center;
margin-left:-150px;
background-color:#000;
top:50%;
height:300px;
margin-top:-150px;
z-index:110;
display:none;
color:white;
overflow-y:scroll;
}

#k{
position:absolute;
margin:5em;
margin-left:23.7em;
margin-top:7em;
}

.kawaii{
padding:5px;
line-height:1.3em;
}


.kawaii i{font-size:14px;}
.kawaii a{background-color:#F5EC90;color:#000;}
.kawaii a:hover{background-color:black;color:white;}
.sugoii {float:left;overflow-y:scroll;position:relative;margin-left:-1px;margin-top:5px;height:240px;width:310px;z-index:10;}
.sugoii a{background-color:#F5EC90;color:#000;font-size:12px;display:inline-block;width:145px;margin:1px;height:18px;float:left;padding:2px;line-height:18px;text-decoration:none;}
.sugoii a:hover{background-color:#FFF8AD;}
#c a{display:inline;text-decoration:none;background-color:white;color:black;}
#c a:hover{display:inline;text-decoration:none;background-color:#F5EC90;color:black;}
.whitebox{padding:1px;margin-top:-4px;margin-left:15px;margin-right:-10px;border:1px solid white;display:inline;float:right;height:15px;width:15px;}
.blackbox{padding:1px;margin-top:-4px;margin-left:15px;margin-right:-10px;border:1px solid black;display:inline;float:right;height:15px;width:15px;}
input[type=button]{display:inline;background-color:white;border:1px solid black;}

.nani h4{border:1px solid #000;color:black;background-color:white;text-transform:lowercase;padding:2px;}
#u h1{float:left;text-align:left;text-transform:uppercase;background-color:black;color:white;padding:5px;}
#c h1{float:left;text-align:left;text-transform:uppercase;background-color:white;color:black;padding:5px;}

#container{position:fixed;width:100%;height:100%;background-color:#fff;display:none;z-index:9;}
#containertwo{position:fixed;width:100%;height:100%;background-color:#000;display:none;z-index:9;}
#showabout{display:inline-block;}
#showabout a{background-color:#000;color:#fff;text-decoration:none;-webkit-transition: all 0.4s linear;-moz-transition: all 0.4s linear;-ms-transition: all 0.4s linear;-o-transition: all 0.4s linear;transition: all 0.4s linear;}
#showabout a:hover{background-color:#F5EC90;color:black;}
</style> 

</head>
<body>

<div id="f">
<script>var user=getCookie("username");</script>
<script>
if(user == "mathoo"){
document.write("hi baby ");
document.write("<span style='font-size:28px;color:#FCA9A9;display:inline;'>");
document.write(user);
document.write("</span>");
document.write("!!!!!!!!!!!!!!!!!!!!!!!");
}
else if(user != ""){
document.write("hi ");
document.write(user);
document.write("!");}
else{
document.write("<a href='http://chiaski.com/dump/hi.php' style='background-color:#000;color:#fff;text-decoration:none;'>hi.</a>");
}
</script><br /> <div id="showabout"><a href="#" title="who is this">chia</a></div> is  <div class="element"></div>
<p>she's also a <s>kind</s> stressed 15 y/o that enjoys generic pop punk music, medium-rare steak, & <script>document.write(r_text[i]);</script></p>
<br />
<p>she also has hobbies. maybe that's important to mention. maybe you're here for them.</p>

<span style="display:inline-block;width:385px;height:1px;background-color:#BDBDBD;"></span>
<div class="kawaii">
<tr>
<i class="fa fa-book"></i> <a href="#" title="there is nothing" style="background-color:#EB8888;"><s>writing</s></a><br />
<i class="fa fa-heart-o"></i> <a href="#" title="its empty pls give me work to do" style="background-color:#F7A57C;"><s>portfolio</s></a><br />
<i class="fa fa-coffee"></i> <a href="https://www.behance.net/chiaski" target="_blank" title="i feel professional!">behance</a><br />
<i class="fa fa-folder-o"></i> <a href="/dump/" title="LITERLA HOLE OF SHIT" style="background-color:#9ED98F;">dump</a>
<div id="showmenu"><i class="fa fa-external-link "></i> <a href="#" title="i think i added too much" style="background-color:#ABC8D4;">links</a></div>
<i class="fa fa-desktop"></i> <a href="#" title="im shy.." style="background-color:#C6A5E8;"><s>???</s></a><br />
<i class="fa fa-terminal"></i> <a href="#" title="nice..." style="background-color:#FFC9D1;"><s>projects</s></a>
</div>

<span style="display:inline-block;width:385px;height:1px;background-color:#BDBDBD;"></span>
 <input type="button" value ="rip cookie" onclick= 'document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 GMT";' />
</div>
</div>

<div id="container">
<div id="u">
<div class="blackbox"><i class="fa fa-close "></i></div>
<div class="blackbox"><i class="fa fa-chevron-down"></i></div>
<div class="nani"><h1>thats_a_lot_of_links.exe</h1><br /><br />
<h4>>> linksout</h4></div>
<div class="sugoii">
<a href="https://twitter.com/DOUJINSHl" target="_blank" title="i try to look normal in front of schoolmates">[main] twitter</a>
<a href="https://twitter.com/iIIaoi" target="_blank" title="i talk about coding and anime. the weeb is FREE">[dev] twitter</a>
<a href="http://league.god.jp" target="_blank" title="basically pink stuff & hot anime girls">tumblr</a>
<a href="http://myanimelist.net/animelist/lux" target="_blank" title="well..">myanimelist</a>
<a href="http://8tracks.com/crownguard" target="_blank" title="im not good iwth music idk what im does">8tracks</a>
<a href="https://osu.ppy.sh/u/2068361" target="_blank" title="welcome to osss">osu</a>
<a href="http://steamcommunity.com/id/hesutia" target="_blank" title="trove it up baby">steam</a>
<a href="https://www.grouvee.com/user/weeaboo/" target="_blank" title="my game backloggery!">grouvee</a>
<a href="http://codepen.io/weeb/" target="_blank" title="im smarrt">codepen</a>
<a href="https://github.com/chiaski" target="_blank" title="very smart! yay computer!">github</a>
<a href="https://medium.com/@Iux" target="_blank" title="very angsty stories">medium</a>
<a href="http://weebs.dreamwidth.org/" target="_blank" title="i dont think ill ever use this but alright">dreamwidth</a>
</div>
</div>

</div>
<div id="containertwo">
<div id="c">
<div class="whitebox"><i class="fa fa-close "></i></div>
<div class="whitebox"><i class="fa fa-chevron-down"></i></div>
<h1>about.exe</h1><br /><br />
<p>> matthew sucks</p>
<p>> (he is <mark style="color:red;background-color:black;">mean</mark> and has taken my nose <em>twice</em> already!)</p>
<p>> "maybe you shouldnt use that tho"</p>
<p>> - matthew roque 2016</p>
<p>> ...</p>
<p>> nice</p>
<p><a href="#">> more detailed about that isnt available yet but the link is here anyway</a></p>
</div>
</div>

<div id="k">

<img src="http://i.imgur.com/Xtj6N9V.gif" title="it me. im so cute" alt="a maplestory rendition of me." align="right" /></div>
</body>
</html>