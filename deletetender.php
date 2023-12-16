<?php
	$mysqli = new mysqli('localhost', 'jnktmchm_admin', 'Patna@2022', 'jnktmchm_adminDB');
            if ($mysqli->connect_error) {
                die('Connect Error (' .
                $mysqli->connect_errno . ') '.
                $mysqli->connect_error);
            }
        if(isset($_POST['id'])){
            $tid=$_POST['id'];
            $sql="DELETE FROM `tender` WHERE `tender`.`id` = '$tid'";
            if($mysqli->query($sql) == TRUE){
                echo 'deleted';
            }else{
              echo 'not deleted';  
            }
            
        }
?>