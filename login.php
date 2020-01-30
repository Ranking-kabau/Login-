<?php
$host="localhost";
$user="root";
$password="";
$db="demo";

$conn = mysqli_connect($host,$user,$password, $db);

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password= $_POST['password'];
    $sql="select * from details where username='".$uname."'AND password='".$password."'limit 1";
    $result=mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result)==1){
        echo"You have successfully Login";
        exit();
    }else{   
        echo"You have entered incorrect password ";
        exit();
    }
    
}
 
?>