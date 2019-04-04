
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Testing</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js" type="text/javascript"></script>
<link href='https://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>
  <style type="text/css">
input{font-family:karla;color:blue;font-weight:900;text-transform:uppercase;background-color:#fff;border:none;padding:10px;border:5px solid blue;}

body{overflow:hidden;}
   #convos{
bottom:30px;
position:absolute;
width:100%;margin:0;
text-align:center;
font-family:karla;
overflow:none;
overflow-x:none;
}

#statusbar{font-family:karla;position:absolute;width:300px;left:50%;margin-left:-150px;padding:10px;}
#side{
font-family:karla;
font-size:12px;
position:absolute;
right:0px;
padding:20px;margin:20px;top:0px;
}

#last{
background-color: rgba(255, 255, 255, 0.9);
position:fixed;
top:0px;
left:0px;
font-family:karla;
width:100%;
height:100%;
text-align:center;
font-size:32px;
z-index:9999;
display:none;
}

#yumo{position:relative;width:600px;height:200px;background-image:url(http://i.imgur.com/qBhJAG8.png);margin:1em;}
#yumocontainer{position:absolute;width:100%;}
  </style>
  </head>
  <body>
<div id="yumocontainer"><center>
<div id="yumo"></div>
<input type="button" value="sleep (+20 energy)" onclick="sleepy();" />
<input type="button" value="talk (-5 energy)" class="speak" onclick="trytoTalk();" />
</center>
</div>

<div id="last">This is it...</div>
  
<div id="statusbar">Energy: <span id="number"></span> || Charisma: <span id="numcharisma"></span> || Days:  <span id="numdays"></span> || Money: <span id="numcash"></span>$</div>
<div id="warning" style="color:red;"></div>

<div id="convos">
<div class="conv">
<p>Woofy?</p>

<input type="button" value="Woofy!" onclick="bobright();" />
<input type="button" value="FUCK WOOFY." onclick="bobwrong();" />
</div>
<div class="conv">
<p>Hello. Do you like butts?</p>

<input type="button" value="Yes, wow, I love butts!" onclick="bobright();" />
<input type="button" value="No, fuck butts." onclick="bobwrong();" />
</div>
<div class="conv">
<p>Hello. Do you like ass?</p>

<input type="button" value="Yes, wow, I love ass!" onclick="bobright();" />
<input type="button" value="No, fuck ass." onclick="bobwrong();" />
</div>
</div>



<script>
$('.conv').hide();
$('.invicecream').hide();
energy = 10;
numcharisma = 0;
numdays = 1;
numcash = 300;
numinvquantity = 0;
icecreamamt = 0;
document.getElementById("number").innerHTML = energy;
document.getElementById("numcharisma").innerHTML = numcharisma;
document.getElementById("numdays").innerHTML = numdays;
document.getElementById("numcash").innerHTML = numcash;
document.getElementById("numinvquantity").innerHTML = numinvquantity;



function trytoTalk(){
if(energy <= 0){
document.getElementById("warning").innerHTML = "You don't have enough energy to talk!";
$("#warning" ).fadeIn( "slow" ).delay("1500").fadeOut("8000");
$(".speak").prop('disabled', true);
    setTimeout(function() {
        $(".speak").prop('disabled', false);
    }, 2000);
}
else{
energy = energy - 5;
document.getElementById("warning").style.color="#678ce9";
document.getElementById("number").innerHTML = energy;
var random = Math.floor(Math.random() * $('.conv').length);
$('.conv').hide().eq(random).show();
$(".speak").prop('disabled', true);



}
}


function bobright(){
numcharisma = numcharisma + 5;
document.getElementById("numcharisma").innerHTML = numcharisma;
document.getElementById("warning").innerHTML = "Your charisma has increased by five!";
$("#warning" ).fadeIn( "slow" ).delay("1500").fadeOut("8000");
$(".speak").prop('disabled', false);
$('.conv').hide();
endSpeak();
}


function bobwrong(){
numcharisma = numcharisma - 5;
document.getElementById("numcharisma").innerHTML = numcharisma;
document.getElementById("warning").innerHTML = "Your charisma has decreased by two for answering wrong!";
$("#warning" ).fadeIn( "slow" ).delay("1500").fadeOut("8000");
$(".speak").prop('disabled', false);
$('.conv').hide();
endSpeak();
}

function endSpeak(){
if(numcharisma <= -4){
$('#yumo').css('background-image','url(http://i.imgur.com/n5tWZOM.png)');
}

else if(numcharisma >= 4){
$('#yumo').css('background-image','url(http://i.imgur.com/LswHB7D.png)');

}

else{
$('#yumo').css('background-image','url(http://i.imgur.com/qBhJAG8.png)');
}}
</script>  

</body>
</html>