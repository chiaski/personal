<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">

<script>
        function validate() {

    var name = document.post.msg.value;
var restricted = ['testing', 'hi'];
name = name.replace(/\r?\n/g, '<br />');

            if(document.post.msg.value == "") {
      $("#notice").text("whaa pls enter soemthing huhu")
                return false

}
else if(name == "ass"){
alert("wow ass");
}
else if($.inArray(name, restricted) !==-1)
            {
                alert("Restricted words");
                return false;
            }
else{
document.post.msg.value += '<br />';
alert(name);
}
}
</script>

<?php

    if(isset($_POST['name']))
    {
        echo htmlentities($_POST['name']);
    }

?>
<link href='https://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <style type="text/css">
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

#container{
font-family:karla;
position:absolute;top:0px;left:0px;width:100%;display:flexbox;
}

#yikes{
position:relative;
width:50%;
text-align:center;
left:50%;
margin-left:-25%;
padding-top:20px;
}

#insideform{
display:inline-block;width:100%;top:0px;padding-top:40px;}

.initialtext{font-size:20px;font-style:italic;}
.text{font-family:lora;font-size:16px;padding-top:10px;}

#demo{white-space:pre-wrap;font-style:italic;display:block;}

.subtitle{font-size:14px}
.title{font-family:lora;font-size:32px;border-bottom:2px solid;margin:5px;padding-bottom:15px;}

textarea{color:#383838;border:none;display:inline-block;max-width:95%;width:95%;font-family:lora;font-size:18px;}
input{font-family:karla;font-size:14px;background-color:black;color:white;padding:6px;border:1px solid #38383a;display:inline-block;width:100px;}

#about{position:fixed;bottom:0px;font-size:12px;font-family:karla;padding:10px;}
#about a{background-color:blue;color:white;text-decoration:none;}
  </style>
  </head>
  <body>
<div id="about">Towa is an experiment developed by <a href="http://chiaski.com">Chia</a>. Towa is a Japanese word that can mean eternity, perpetuity; all things unending.</div>
<div id="container">
<div id="yikes">
<div class="title">Towa<br />
<div class="subtitle">The never-ending story!</div></div>
<div class="text">
<span class="initialtext">Once upon a time...<br /></span>
<?php
$story = file_get_contents( "words.html" ); // get the contents, and echo it out.
echo nl2br($story);
?>
<div id="demo"></div>
</div>
<div id="insideform">
<form id="post" name="post" action="storeText.php" method="post" onsubmit="return validate()">
<textarea name="msg" placeholder="Contribute to the never-ending story. Click here to type!" rows="4" id="name"></textarea>
<br />
    <input class="button" type="submit"  value="Send"/>
</form>
<div id="notice"></div>
            </form>
</div></div>
</div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js" type="text/javascript"></script>
<script>
jQuery(function(){
    $("#name").keyup(function() {
      var sampletext = $("#name").val(); 
      $("#demo").text(sampletext);
    });
});
</script>
  </body>
</html>