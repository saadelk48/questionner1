<?php 
$conn= mysqli_connect('localhost','root','','questionnaire');
if($conn){
    echo"conn succ";
}
else{echo"erro";}
?>