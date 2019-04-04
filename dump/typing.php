
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="jquery.js"></script>
    <script src="/src/typed.js" type="text/javascript"></script>
<script>
  $(function(){
      $(".element").typed({
        strings: ["very gay.", "very cute", "a neopet.", "horrendously lazy", "an amazing procrastinator", "a trove lord", "deserves to bein tsm", "a very cute player", "a land daddy enthusiast"],
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
<style type="text/css">
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

.element{display:inline-block;}
</style>
</head>
<body>
hi. chia is  <div class="element"></div>

</body>
</html>