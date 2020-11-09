<?php
include('config.php');
?>


<?php 
if (isset($_POST['btn'])){
 echo "Dear, ".$_POST['Name']." You are Welcome.".'<br>';
 $username = $_POST['Name'];
 $age = $_POST['Age'];
 $contact = $_POST['PhoneNo'];
    
    $sql  = "INSERT INTO `user_info` (Name, Age, PhoneNo
    VALUES ('$username', '$age', '$contact')";
    mysqli_query($conn, $sql);
    header("Location:details.php");
}
else{
    echo "Welcome Guest";
}
?>