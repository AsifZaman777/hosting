<?php



$host="localhost";
$user="root";
$pass="";


//connect to database
$con=mysqli_connect($host,$user);

if(!$con)
{
    die("Connectione failed due to ....".mysqli_connect_error());
}


$name=$_POST['username'];
$batch=$_POST['ins'];
$current_month=$_POST['month'];
$payment_status=$_POST['payment'];

//insert data into database
$sql="INSERT INTO `batch` . `hsb2` ( `st_name`, `b_name`, `r_month`, `pay_stat`) 
VALUES ('$name', '$batch', '$current_month', '$payment_status');";

if($con->query($sql)==TRUE)
{
    echo "You are registered successfully";
}
else
{
    echo "Error: ".$sql."<br>".$con->error;
}


$con->close();


?>
