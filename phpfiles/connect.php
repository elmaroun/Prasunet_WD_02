<?php
$con = new mysqli('localhost','root','','to-do-list');
if(!$con){
    die(mysqli_error($con));
}
?>