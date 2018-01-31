<html>
<body bgcolor="grey">
<?php
function Validate(&$OK)
{
$OK="Not OK";
$host = "localhost";
$db_user = "id860052_kshitij";
$db_password = "kshitij123";
$db_name = "id860052_kshitij_db";
$conn = mysqli_connect($host,$db_user,$db_password,$db_name);
if(!$conn)
die("Connection failed:".mysqli_error($conn));
if(!mysqli_select_db($conn,$dbname))
echo "Database could not be opened:".mysqli_error($conn);
$Uname=$_POST["userName"];
$password=$_POST["Password"];
$sql="SELECT * FROM `college_website_users` WHERE uname='$Uname'";
$res=mysqli_query($conn, $sql);
$rows=mysqli_num_rows($res);
if($rows==1)
{
$row=mysqli_fetch_assoc($res);
if($password==$row['psw'])
$OK="OK";
else echo "Incorrect username or password";

}
mysqli_close($conn);
}
$OK="";
if(isset($_POST["btn_login"]))
Validate($OK);
?>
<center> 
<font size=6>
<script language=javascript><?php if(isset($_POST["btn_login"]) && ($OK=='OK')) echo "window.location='userd.php'" ;?>
</script>
<br>
<br>
<form name=T_Data Action="<?php echo $_SERVER["PHP_SELF"]?>" method=post>
<img src="img/Logo.png" height=200 > <p>
<b><font face="algerian" size="8"> Welcome to Manchester University</font> </b> <p>
<b>User name:</b><input type=text name=userName><BR>
<b>Password:</b><Input type=password name=Password><p>
<input type=Submit name=btn_login value="Login">
<input type=reset value=Reset>
<a href="frame.php"><input type=reset value=home></a><BR>
</center>
</form>
</body>
</html>
