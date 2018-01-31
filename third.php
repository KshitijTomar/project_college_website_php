<html>
<head>
<title>Manchester University</title>
</head>
<body bgcolor="black"><font color="white">
<center>
 
<?php
echo date("F j,Y")."<br>";
echo date("h:i:sa")."<br>";
?>
<embed src="coin.swf" height="300" width="300">
 
 <br>
<?php
session_start();
if(isset($_SESSION['visits']))
$_SESSION['visits']=$_SESSION['visits']+1;
else
$_SESSION['visits']=1;
echo "Welcome".",your  visits=".$_SESSION['visits'];
?>

</center>
</body>
</html>
