<!-- headers etc. omitted -->
<script>
function callPHP(params) {
    var httpc = new XMLHttpRequest(); // simplified for clarity
    var url = "get_data.php";
    httpc.open("POST", url, true); // sending as POST

    httpc.onreadystatechange = function() { //Call a function when the state changes.
        if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
            alert(httpc.responseText); // some processing here, or whatever you want to do with the response
        }
    };
    httpc.send(params);
}
</script>
<a href="#" onclick="callPHP('lorem=ipsum&foo=bar')">call PHP script</a>