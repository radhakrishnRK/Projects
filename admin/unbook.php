<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"royal_hotel");
    if($_GET['rt'] == 'a'){
    	$query = "update single_non_ac_room set Client_Name = null,Mobile_Number = null,Address = null,Check_in = null,Check_out = null,Status = 0 where Room_No = $_GET[rn]";
    }
    if($_GET['rt'] == 'b'){
    	$query = "update single_ac_room set Client_Name = null,Mobile_Number = null,Address = null,Check_in = null,Check_out = null,Status = 0 where Room_No = $_GET[rn]";
    }
   
    $query_run = mysqli_query($connection,$query);
    header("location:redirect.php");   
?>