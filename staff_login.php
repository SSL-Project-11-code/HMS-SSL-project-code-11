<?php
$servername="localhost";
$username="root";
$password="";
$database="employee";
$conn = mysqli_connect($servername,$username,$password,$database);

$USERNAME=$_POST['username_i'];
$PASSWORD=$_POST['pass_2'];
$sql1 = "SELECT * FROM `list_1` where username='$USERNAME' AND paswword='$PASSWORD'";
$result = mysqli_query($conn,$sql1);
$i=0;
while($row1=mysqli_fetch_assoc($result))
{
   $i=$i+1; 
   $id = $row1['id'];
   // $username_x= $row1['username'];
   // echo "$id";
}
if($i==1)
{  echo"<link rel='stylesheet' href='Loading.css'>";
    echo "<h2>Login Successful</h2>";
    echo "<form action='staff_welcome.php'  method='post' enctype='multipart/form-data'><button type='submit' class='b1' name='login' value='$USERNAME'><span>Enter</span></button></form>";

}

else{
   echo "<h2 style='color: red'>Wrong Credentials</h2>";
}
?>




