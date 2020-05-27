

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
	$no=$_POST['Number'];
	class jumbler
	{
		public $key;
		public function setkey($k)
		{
			$this->key=$k;
		}
		public function getkey()
		{
			return $this->key;
		}
		public function encrypt($plain)
		{
		for($x=0;$x<strlen($plain);$x++)
		{
			$cipher[]=ord($plain[$x])+$this->getkey()+($x*$this->getkey());
		}
		return implode('/',$cipher); // array to string
	}
	
}


$text =$_POST['Message'];
$key =(int)$_POST['Cipher'];

$j=new jumbler;

	$j->setkey($key);
	echo "<br>";
	$x= $j-> encrypt($text);
	
	$arr=explode('/',$x);
	//print_r($arr);

	$r1=rand(10,20);
	$r2=rand(10,20);
	echo "<br>";
	//echo "Random no1:";
	//echo $r1;
	echo "<br>";
	//echo "Random no2:";
	//echo $r2;
	
	
	echo "<br>";
	$cr1=10^$r2;
	//echo "test xor op:	".$cr1;
	$cr2=$r1&$cr1;
	//echo "test and op:  ".$cr2;
	
	$j1=new jumbler;


	$j1->setkey($cr2);
	$x1= $j1-> encrypt($x);
	echo "<br>";
//	echo "New en";
	//echo $x1;
	
	 
	 $my=new mysqli("localhost","root","","aencrypt");
	 $sql="insert into userencrypt(Number,Username,Message1,Cipherkey1,Message2,Cipherkey2)values
	('$no','$user_check','$x','$key','$x1','$cr2')";
	
	$result=$my->query($sql);
	if($result==true)
	{
		echo "Encrypt successfully";
			   

	}
	else
	{
		
		 
	}
	
	

  
  ?>
     </p>
     <p>&nbsp;</p>
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


