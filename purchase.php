<?php
$firstname = $_REQUEST['name1'];
$lastname = $_REQUEST['lastname'];
// $address = $_REQUEST['address'];
// $gender = $_REQUEST['gender'];
$gmail = $_REQUEST['gmail'];
$number = $_REQUEST['number'];
$card = $_REQUEST['card'];

if(isset($_POST['btn']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="spearo";

    $conn = mysqli_connect($host,$user,$password,$db);


    mysqli_select_db($conn,$db);

    
    $insert="INSERT into purchase values('$firstname','$lastname','$gmail','$number','$card')";
    
    $result= mysqli_query($conn,$insert);

    if($result){
  echo("Done");
}
else{
      echo("Not Done");

    }
    
  mysqli_close($conn);

}



?>