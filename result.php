<html>
<body>

<?php
$choice=$_GET["result"];
if($choice==1){
$title=$_GET['title'];
$name=$_GET['name'];
$email=$_GET['email'];
$reg=$_GET['reg'];
echo "Hi $title $name ($reg), you will be contact via $email";

}



?>
<br><br>
<button id="Home" onclick="window.location.href='index.html'">Home</button>

</body>
</html>





