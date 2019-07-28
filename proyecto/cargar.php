<?php
require("conection.php");
$nombre=$_POST['name'];
	$precio=$_POST['price'];

 
$sql = "INSERT INTO product (name , price) VALUES ('$nombre' , '$precio')";
if (mysqli_query($con, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
?>