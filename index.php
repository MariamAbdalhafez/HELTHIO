<?php
$firstname=$_REQUEST['first name'];
$lastname=$_REQUEST['last name'];
$adress=$_REQUEST['adress'];
$number=$_REQUEST['number'];
$email=$_REQUEST['email'];
$age=$_REQUEST['age'];
$gender=$_REQUEST['gender'];
$gender=$_REQUEST['gender'];
$submit=$_REQUEST['Submit'];



if(isset($_post['Submit']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="helthio";



    $con= mysqli_connect($host,$user.$password,$db)

$insert= "insert into appointment values ('$firstname','$lastname','$adress','$number','$email','$age','$gender','$gender','$submit')";
mysqli_query($con,$insert);
if($con){
    echo("your appointment is done,welcome friend!")
}
else{
    echo("your appointment has failed")
}
    
}
























?>
