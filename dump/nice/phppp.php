
<!DOCTYPE html>
<html>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js" type="text/javascript"></script>
<body>

<p>Click the button to demonstrate the prompt box.</p>

<button onclick="myFunction()">Try it</button>

<input type="text" id="name" placeholder="Enter your name here."></input>

<p id="demo"></p>

<script>

jQuery(function(){
    $("#name").keyup(function() {
      var user = $("#name").val(); 
      $("#demo").text(user + "?");
    });
});
</script>
<scriptf>
function myFunction()
{

var person=$('#name').val();
x=$('#txt_name').val('bla');



/* if (person!=null)
  {
  x="Hello " + person + "! How are you today?";
  document.getElementById("demo").innerHTML=x;
  } */
}
</script>

</body>
</html>