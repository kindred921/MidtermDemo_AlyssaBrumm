 <?php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
      echo '<br /><br /><a href="logout.php">Logout</a>';  
 }  
 else  
 {  
      header("location:login.php");  
 }  
 //https://www.webslesson.info/2016/06/php-login-script-using-pdo-with-session.html
 ?>  