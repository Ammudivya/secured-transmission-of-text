Insert.php
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NewEncrypt</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center" class="style1">New Encryption Algorithm in Cloud Computing</div></td>
  </tr>
  <tr>
    <td><ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="index.php">Home</a>          </li>
      <li><a href="Register.php">Register</a></li>
      <li><a href="Login.php">Login</a>          </li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>
    <?php
	$my=new mysqli("localhost","root","","aencrypt");
	if($my==false)
	{
		die("error:could not connect.".mysqli_connect_error());
	}
	
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	
	
	$sql="insert into user(Username,Password)values
	('$Username','$Password')";
	
	$result=$my->query($sql);
	if($result==true)
	{
		echo "registered successfully";
			   

	}
	else
	{
		echo "no";
		 
	}
?>
    </td>
  </tr>
  <tr>
    <td>&copy; Copyright</td>
  </tr>
</table>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>
