<?php
 $un=$psw = "";
 $un=$_POST['username'];
 $psw=$_POST['password'];
 
 $conn = mysqli_connect("localhost","root","","info");
 if (!$conn) 
 {
 die("Connection failed: " . mysqli_connect_error());
 }
 $re="";
 $ch="INSERT INTO userData VALUES 
('".$un."','".$psw."')";

 if(mysqli_query($conn,$ch))
 {
echo "<html>";
echo "<body style='display:flex;flex-direction:column;justify-content:center;align-items:center;height:80vh;'>";
echo "<h2 align='center' style='font-size:40px'> Welcome $un </h2>";
echo "<button onclick='history.go(-2)' style='background-color:green;border:0px;border-radius:5px;height:8vh;padding:5px; width:10vw;color:white;'>Continue</button>";
echo "<script>";
 echo "function goBack() {";
 echo "window.history.back()}";
 echo "</script>";
echo "</body>";
echo "</html>";

 }
 else
 { 
 echo "ERROR: Could not able to execute $ch. " . mysqli_error($conn);
 echo "record not entered";
 }
 mysqli_close($conn);

?>
