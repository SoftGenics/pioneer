<?php 
	$mysqli = new mysqli('localhost', 'jnktmchm_admin', 'Patna@2022', 'jnktmchm_adminDB');
            if ($mysqli->connect_error) {
                die('Connect Error (' .
                $mysqli->connect_errno . ') '.
                $mysqli->connect_error);
                
            }
     
?>
<html>
    <title>Dashboard</title>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="../wp-content/uploads/2019/10/logo-1.png" alt="" width="60" height="60">
            </a>
          </div>
        </nav>