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
        alert("Hello " + user);
		</script>
		
		<input type="button" value ="delete cookie" onclick= 'document.cookie = "username=; expires=Thu, 01 Jan 2000 00:00:00 GMT";'/>