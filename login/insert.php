<?php
$connection = mysqli_connect("localhost", "root", ""); 
$db = mysqli_select_db($connection,"login"); 
if(isset($_POST['submit'])){ 
 
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
if($name !=''||$email !=''){
$query = mysqli_query($connection,"insert into register(username, password, email, phone) values ('$name', '$password', '$email', '$contact')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection);
?>

