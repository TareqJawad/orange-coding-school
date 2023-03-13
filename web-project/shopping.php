<html>
<body>
<?php
$name=$_POST["fu"];
 $password=$_POST["pa"];
 $cr=$_POST["ccn"];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "0780682572");
mysqli_select_db($link,"customer");
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt insert query execution
$sql = "INSERT INTO login_password (customer_id,login,password,credit_num) VALUES ('1','$name', '$password','$cr')";
if(empty($name) || empty($password) || empty($cr) ){
die("insert name or/and password or/and credit</body></html>");}
if(!(preg_match("/^[[:alpha:]]{1} [[:alnum:]]{5}$/","$name")))
	die("name must start with letter and then letter or number or $ or _ and the name must be exactly 6 digits</body></html>");
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
</body>
</html>