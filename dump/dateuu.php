<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Testing</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js" type="text/javascript"></script>
<link href='https://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>
  <style type="text/css">
input{font-family:karla;background-color:#d2d2d0;border:none;padding:10px;}
   #convos{
left:0px;
top:0px;
position:absolute;
padding:50px;
border:1px solid #d2d2d0;
margin:100px;
font-family:karla;
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
  </style>
  </head>
  <body>
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
<input type="button" value="sleep (+20 energy)" onclick="sleepy();" />
<input type="button" value="talk (-5 energy)" class="speak" onclick="trytoTalk();" />

<div id="side">
<div id="shopdiv">
<h2>Shop</h2>
<p class="shopdialog">Hello, welcome to the shop.</p>
<input type="button" value="Ice Cream" onclick="buyIceCream()" />
<input type="button" value="Self-respect  (NOT WORKING)" onclick="buySelfRespect()" />
<script>
function buyIceCream(){
if(numcash >= 100){
$(".shopdialog").text("You bought ice cream!");
numcash = numcash - 100;
document.getElementById("numcash").innerHTML = numcash;
numinvquantity = numinvquantity + 1;
document.getElementById("numinvquantity").innerHTML = numinvquantity;
fuck();
}

else{
$(".shopdialog").text("You don't have enough money for that.");
}
}

function fuck(){
$('.invicecream').show();
icecreamamt = icecreamamt + 1;
$(".invicecream").val("Ice Cream (" + icecreamamt + ")");
}

function eatIceCream(){
if(icecreamamt >= 1){
numcharisma = numcharisma + 5;
document.getElementById("numcharisma").innerHTML = numcharisma;
document.getElementById("warning").innerHTML = "You ate the ice cream and gained some charisma.";
$("#warning" ).fadeIn( "slow" ).delay("1500").fadeOut("8000");
icecreamamt = icecreamamt - 1;
numinvquantity = numinvquantity - 1;
$(".invicecream").val("Ice Cream (" + icecreamamt + ")");
document.getElementById("numinvquantity").innerHTML = numinvquantity;
if(icecreamamt === 0){
$('.invicecream').hide();
}
}
}


function checkIceCreamquantity(){

}
</script>
</div>

<div id="inventorydiv">
<h2>Inventory</h2>
Quantity: <span id="numinvquantity"></span><br />
<input type="button" class="invicecream" onclick="eatIceCream()" value="" />
<br />
Clicking on an inventory item will eat it!
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


function sleepy(){
if(numdays >= 10){
document.getElementById("warning").innerHTML = "This is your last day.";
$("#warning" ).fadeIn( "slow" ).delay("1500").fadeOut("8000");

}
else{
energy = energy + 20;
numdays = numdays + 1;
document.getElementById("number").innerHTML = energy;
document.getElementById("numdays").innerHTML = numdays;
}
}

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
}


function bobwrong(){
numcharisma = numcharisma - 2;
document.getElementById("numcharisma").innerHTML = numcharisma;
document.getElementById("warning").innerHTML = "Your charisma has decreased by two for answering wrong!";
$("#warning" ).fadeIn( "slow" ).delay("1500").fadeOut("8000");
$(".speak").prop('disabled', false);
$('.conv').hide();
}
</script>  

</body>
</html>