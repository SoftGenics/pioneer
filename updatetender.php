<?php
	$mysqli = new mysqli('localhost', 'jnktmchm_admin', 'Patna@2022', 'jnktmchm_adminDB');
            if ($mysqli->connect_error) {
                die('Connect Error (' .
                $mysqli->connect_errno . ') '.
                $mysqli->connect_error);
                
            }
$desc=isset($_POST['desc'])?$mysqli->real_escape_string(strtoupper(trim($_POST['desc']))):NULL;;
$csv=isset($_POST['csv'])?$mysqli->real_escape_string(strtoupper(trim($_POST['csv']))):NULL;;
$pdf=isset($_POST['pdf'])?$mysqli->real_escape_string(strtoupper(trim($_POST['pdf']))):NULL;;
$sdate=isset($_POST['sdate'])?$mysqli->real_escape_string(strtoupper(trim($_POST['sdate']))):NULL;;
$edate=isset($_POST['edate'])?$mysqli->real_escape_string(strtoupper(trim($_POST['edate']))):NULL;;
$mark=isset($_POST['mark'])?$mysqli->real_escape_string(strtoupper(trim($_POST['mark']))):NULL;;
$updatequery="UPDATE `tender` SET `description` = '$desc' WHERE `tender`.`id` = 2" ;
if($mysqli->query($updatequery) == TRUE){
    echo 'ADDED';
}else{
  echo 'not aDDED';  
}
?>