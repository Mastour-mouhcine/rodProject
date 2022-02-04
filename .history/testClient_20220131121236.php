<script>
var myVar = "test";

$.ajax({
 url: "test.php",
 type: "POST",
 data:{"myData":myVar}
}).done(function(data) {
    console.log(data);
});
</script>