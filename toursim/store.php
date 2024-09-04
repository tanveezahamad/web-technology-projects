<?php
 if 
(empty($_POST['fname'])||empty($_POST['lname'])||empty($_POST['dob'])||empty($_POST['ge'])||empty($_POST['uname'])||empty($_POST['psw'])||empty($_POST['cpsw'])||empty($_POST['addre'])||empty($_POST['pco'])||empty($_POST['em'])||empty($_POST['br'])||(!(isset($_POST['la'])||isset($_POST['lan'])||isset($_POST['lang']))))
{ 
echo "<html>";
echo "<body>";
echo "<h3 align='center'> some credentials are missing </h3>";
echo "<span style='color:red'> please fill all the credentials which are marked</span>";
echo "<br><button onclick='goBack()'>Go Back</button>";
echo "<script>";
 echo "function goBack() {";
 echo "window.history.back()}";
 echo "</script>";
echo "</body>";
echo "</html>";
}
else {
 $fn=$ln=$d=$b=$g=$un=$pa=$cpa=$ad=$pc=$e="";
 $fn=$_POST['fname'];
 $ln=$_POST['lname'];
 $d=$_POST['dob'];
 $b=$_POST['br'];
 $g=$_POST['ge'];  
 $un=$_POST['uname'];
 $pa=$_POST['psw'];
 $cpa=$_POST['cpsw'];
 $ad=$_POST['addre'];
 $pc=$_POST['pco'];
 $e=$_POST['em'];
 $l1=$l2=$l3="";
 if(isset($_POST['la']))
 {
 $l1="yes";
 }
 if(isset($_POST['lan']))
 {
 $l2="yes";
 }
 if(isset($_POST['lang']))
 {
 $l3="yes";
 }
 if(!($pa==$cpa))
 {
 echo "<html>";
echo "<body>";
echo "<h3 align='center'><span style='color:red'>your passwords are not matching please check</h3>";
echo "<br><button onclick='goBack()'>Go Back</button>";
echo "<script>";
 echo "function goBack() {";
 echo "window.history.back()}";
 echo "</script>";
echo "</body>";
echo "</html>";
exit;
 }
 $conn = mysqli_connect("localhost","root","","pyda");
 if (!$conn) 
 {
 die("Connection failed: " . mysqli_connect_error());
 }
 $re="";
 $ch="INSERT INTO hello VALUES ('".$fn."','".$ln."','".$g."','".$d."')";
 if(mysqli_query($conn,$ch))
 {
echo "<html>";
echo "<body>";
 echo "<h3 align='center'>Successfully stored</h3>";
echo "<br><a href='f3.php' target='f3'>login</a>";
 echo "</html>";
 echo "</body>";
 }
 else
 { 
 echo "ERROR: Could not able to execute $ch. " . mysqli_error($conn);
 echo "record not entered";
 }
 mysqli_close($conn);
}
?>