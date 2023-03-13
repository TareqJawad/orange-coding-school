<html>
<body>
<?php
$name=$_POST["g"];
$link = mysqli_connect("localhost", "root", "0780682572");
mysqli_select_db($link,"customer");
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt insert query execution
$sql = "INSERT INTO shopping_cart (product_id,product_name,product_price) VALUES ('1','$name', '1,2')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
}
?>
</body>
</html>