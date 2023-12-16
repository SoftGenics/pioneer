<?php 
	$mysqli = new mysqli('localhost', 'jnktmchm_admin', 'Patna@2022', 'jnktmchm_adminDB');
            if ($mysqli->connect_error) {
                die('Connect Error (' .
                $mysqli->connect_errno . ') '.
                $mysqli->connect_error);
                
            }
     
?>
<html>
    <title>JNKTMCH | ADMIN</title>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
            .main-conatiner{
             min-height: 100vh; 
          display: flex;
          align-items: center;
          justify-content: center;
          font-family: "Poppins", sans-serif;
        }
        .group {
          margin: 20px 0px 20px 0px;
        }
.signin {
          min-height: 300px; 
          align-items: center;
          text-align: center;
          padding: 30px 30px 0px 30px;
         
          box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
        }
        
      
        
        .group input {
          width: 280px;
          height: 40px;
          border: 1px solid #aaa;
          font-size: 13px;
          padding: 0px 10px 0px 10px;
          
          font-family: "Poppins", sans-serif;
          transition: 0.5s;
        }
        
      
        .group input:focus{
            outline:none !important;
            border: 1px solid #000;
        }
        
        .group button {
          width: 300px;
          height: 45px;
          outline: none;
          border: none;
          background-color: #000000;
          color: #fff;
          font-family: "Poppins", sans-serif;
          font-weight: 600;
          font-size: 16px;
          border-radius: 5px;
          margin-top:10px;
          margin-bottom:10px;
        }
        
      
        

        
   
        .head {
          float: left;
          margin-top: 0px;
        }
        
        .head p {
          margin-top: -20px;
          color: gray;
          font-weight: 400;
          padding-bottom: 20px;
          float: left;
        }
        
        .field-icon {
          float: right;
          margin-left: -30px;
          margin-top: 15px;
          position: absolute;
          z-index: 2;
        }
        
        .group button span {
          cursor: pointer;
          display: inline-block;
          position: relative;
          transition: 0.5s;
        }
        
        .group button span:after {
          content: "\00bb";
          position: absolute;
          opacity: 0;
          top: 0;
          right: -20px;
          transition: 0.5s;
        }
        
        .group button:hover span {
          padding-right: 25px;
        }
        
        .group button:hover span:after {
          opacity: 1;
          right: 0;
        }
        
        @media screen and (max-width: 400px) {
          .signin{
            border: 0;
            padding: 0px;
            border-radius: 10px;
            box-shadow: none;
          }
        }
            .error-message {
  background-color: #fce4e4;
  border: 1px solid #fcc2c3;
  float: left;
  padding: 20px 30px;
}

.error-text {
  color: #cc0033;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 13px;
  font-weight: bold;
  line-height: 20px;
  text-shadow: 1px 1px rgba(250,250,250,.3);
}

    </style>
    </head>
    <body>
<?php 
if(isset($_POST['controller-submit']))
{
$userName=isset($_POST['username'])?$mysqli->real_escape_string(trim($_POST['username'])):"N/A_UserName";
$userPassword=isset($_POST['password'])?$mysqli->real_escape_string(trim($_POST['password'])):"N/A_Password";
$loggedIn="SELECT * FROM `admin_controller` WHERE `username`='$userName' AND `password`='$userPassword'";
$loginResult=$mysqli->query($loggedIn);
if($loginResult->num_rows>0){
  header("Location: panel.php");
	$script = "<script>
     window.location = 'panel.php';</script>";
     echo $script;
}else{
   $pass='<div class="error-message">
  <span class="error-text">Login Failed: incorrect username and password</span>
</div>'; 
  
}
}
?>
<div class="conatiner main-conatiner">

        <div class="signin">
                 <?=$pass?>
                <h3>Admin Panel</h3>
              <form method="POST">
                <div class="group head">
                </div>
                <div class="group">
                  <input type="text" name="username" id="controller-name" required placeholder="Email">
                </div>
                <div class="group">
                  <input name="password" id="controller-password" type="password" required placeholder="Password">
                  <span toggle="#controller-password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="group">
                  <button type="submit" name="controller-submit" id="controller-submit"><span>Login</span></button>
                </div>
              </form>
              </div>
</div>

    </body>
</html>
<script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
	<script>
$(".toggle-password").click(function () {
  $(this).toggleClass("fa-eye fa-eye-slash");

  var input = $($(this).attr("toggle"));

  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
var xSeconds = 1000; // 1 second

setTimeout(function() {
   $('#overlay').fadeOut('fast');
   $('#box').hide();
}, xSeconds);

	</script>