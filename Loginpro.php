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
	session_start();
	$Username=$_POST['Username'];
	$Pwd=$_POST['Password'];
	
	
	$my=new mysqli("localhost","root","","aencrypt");
	
	if($my==false)
	{
		die("error:could not connect.".mysqli_connect_error());
	}
	
	$sql="select * from user where(Username='$Username')and(Password='$Pwd')";
	
	$result=$my->query($sql);
	
	
	
		
	
	if($result->num_rows==0)
	{
		echo "password is wrong";		
	}
	else
	{    
		while($c=$result->fetch_array())
		{

    		   
		}
	

       $_SESSION['login_user']=$Username;
	  
	   header("location:Main.php");
	   echo "password is correct";
	}
?>
    
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
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
Main.php
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
      <li><a href="#" class="MenuBarItemSubmenu">Encryption</a>
        <ul>
          <li><a href="Encrypttext.php">Text</a></li>
        </ul>
        </li>
      <li><a href="#" class="MenuBarItemSubmenu">Decryption</a>
        <ul>
          <li><a href="Decrypttext.php">Text</a></li>
        </ul>
        </li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>
     <p>
       <?php
	session_start();
	$user_check=$_SESSION['login_user'];
	echo "Welcome to Cloud Encryption Process :". $user_check;
  
  ?>
     </p>
     <p>&nbsp; </p>
     <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
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
