<html>
<body>
<?php
$name=$_POST["log"];
$password=$_POST["pass"];
$credit=$_POST["crd"];
$cr=$_POST["crdb"];
$db=mysqli_connect("localhost","root","0780682572");
mysqli_select_db($db,"customer");
$result="select login,password,credit_num from login_password where login='$name' AND password='$password' AND credit_num='$credit'";
$s=mysqli_query($db,$result);
mysqli_close($db);
if(empty($name) || empty($password) || empty($credit) || empty($cr)){
die("insert name or/and password or/and credit or/and balance</body></html>");}
else if($cr<"1000"){
	die("your balance isn't enough</body></html>");
}
while($a=mysqli_fetch_row($s)){
	for($i=0;$i<1;$i++)
		print("<a href='table-web.html'>'click for enter'</a>");
	print("<br>");
}
?>
</body>
</html>