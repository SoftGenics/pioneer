<?php
$data = array();
include_once("def_constant.php");
	$mysqli = new mysqli('localhost', 'jnktmchm_admin', 'Patna@2022', 'jnktmchm_adminDB');
	mysqli_set_charset($mysqli  ,'utf8');
            if ($mysqli->connect_error) {
                die('Connect Error (' .
                $mysqli->connect_errno . ') '.
                $mysqli->connect_error);
                
            }
$desc=isset($_POST['desc'])?$mysqli->real_escape_string(strtoupper(trim($_POST['desc']))):NULL;;
// $csv=isset($_POST['csv'])?$mysqli->real_escape_string(strtoupper(trim($_POST['csv']))):NULL;
$pdf=isset($_POST['pdf'])?$mysqli->real_escape_string(strtoupper(trim($_POST['pdf']))):NULL;;
$sdate=isset($_POST['sdate'])?$mysqli->real_escape_string(strtoupper(trim($_POST['sdate']))):NULL;;
$edate=isset($_POST['edate'])?$mysqli->real_escape_string(strtoupper(trim($_POST['edate']))):NULL;;
$mark=isset($_POST['mark'])?$mysqli->real_escape_string(strtoupper(trim($_POST['mark']))):NULL;;
	        if($_FILES['file']==TRUE){
				$targetfolderDest=constant("JNKTMCHPATH")."csvfile/"; 
				$targetfilename=basename($_FILES['file']['name']);
				$targetFilePath = $targetfolderDest . $targetfilename; 
				$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
				move_uploaded_file($_FILES['file']['tmp_name'], $targetfolderDest); 
			}
			$targetFilePath=isset($_POST['file'])?$mysqli->real_escape_string(strtoupper(trim($_POST['file']))):NULL;

$tenderinsert = "INSERT INTO `tender` (`description`, `booklist`, `detail_pdf`, `pdate`, `edate`, `mark`) VALUES ('$desc', '$targetFilePath', '$pdf', '$sdate', '$edate', '$mark')";
if($mysqli->query($tenderinsert) == TRUE){
    echo 'ADDED';
}else{
  echo 'not aDDED';  
}
?>
