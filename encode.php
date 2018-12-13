<!DOCTYPE html>
<html>
<body>

<p>Click the button to encode a URI.</p>
    <script> 
        var uri = "my test.asp?name=ståle&car=saab  ";
        document.write(uri);
    </script>
<button onclick="myFunction()">Encode</button>

<p id="demo"></p>

<script>
function myFunction() {
    
    var res = encodeURI(uri);
    document.getElementById("demo").innerHTML = res;
}
</script>

</body>
</html>
