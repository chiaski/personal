
<!doctype html>


<html>

<head>

<title>t.js &mdash; 2</title>


<meta charset="utf-8"/>

<link rel="prev" href="http://mn.tn/dev/t.js/demo-1"/>
<link rel="next" href="http://mn.tn/dev/t.js/demo-3"/>


<link href="http://mn.tn/dev/t.js/t.js.1.png" type="image/png" rel="shortcut icon"/>
<link href="http://mn.tn/dev/t.js/t.js.1.png" type="image/png" rel="image_src"/>
<link href="//fonts.googleapis.com/css?family=VT323" rel="stylesheet" type="text/css"/>


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
    var user=getCookie("username");
		</script>

<style type="text/css" media="all">
<!--

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
color:black;
font-family:vt323,monospace;
font-size:25px;
line-height:25px;
text-shadow:-1px 0px 2px #eee;
}


section{
position:absolute;
top:15%;
left:50%;
width:400px;
margin-left:-200px;
}


pre{padding:5px;width:300px;opacity:.9;}


del{text-decoration:none;}


.blue{background:blue;color:white;}

.btn,button{padding:5px;background:black;color:white;}
.btn{text-decoration:none;}

-->
</style>




<script type="text/javascript" src="http://chiaski.com/jquery.js"></script> <!--jQuery-2.1.1-->
<script type="text/javascript" src="http://chiaski.com/dump/t.js"></script>


<script type="text/javascript">
/*<![CDATA[*/



$(function(){



 $('pre').t({

    caret:'<span style="color:mediumslateblue;">&para;</span>',
    speed:30,
    delay:2,

    typing:function(e,t,l,c){

      if(/\u200c/.test(c)){
       $(e).t('pause');    
      }
      
      if(c=='\u200d'){
       $(e).find('del').animate({_:1},{duration:5e2,complete:function(){$(this).addClass('blue');}});
      }
     
    }  


}).click(function(){$(this).t('pause',false);});




$(document).on('click','#add-time-btn',function(){

  $('pre').t('add','&gt; '+(new Date()).getTime()+'\n');

});



});




/*]]>*/
</script>



</head>




<body>


<section>

<pre>


Hi.
Nice one, <script>document.write(user);</script><script>.text(user);</script>
<strong>Bar.</strong><ins>1.5</ins>&#x200c;
After next line, typing will
pause <em>(click to continue)</em>.
&#x200c;<u>Very <del class="k">bad&#x200d;<ins>0.75</ins></del>good.</u>

<button id="add-time-btn" title="add: (new Date()).getTime()">+</button> <a href="/dev/t.js/demo-3" class="btn">&gt;</a>


</pre><br/><br/>

</section>


</body>



</html>
