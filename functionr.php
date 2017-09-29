<?php
session_start();

include 'connect.inc.php';
function getfield2($conn)
{  $query="SELECT username FROM registration WHERE id='".$_SESSION['userid']."'";
   if($conn->query($query))
   { 
   	$result=$conn->query($query);
   	$row = $result->fetch_assoc();
   return $row['username'];
	}
}



?>