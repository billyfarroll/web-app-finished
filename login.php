<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php require_once("functions.php"); ?>


<?php
    if(isset($_POST["login"])) {
        $username = $_POST["user_name"];
        $password = $_POST["user_password"];
        
        $query = "SELECT * FROM users WHERE user_name='{$username}' AND user_password='{$password}' LIMIT 1";
        $result = mysqli_query($connection, $query); 
        
        if($user = mysqli_fetch_assoc($result)) {
            $_SESSION["message"] = "Success, welcome back {$user["user_name"]}";
            $_SESSION["user_name"] = $user["user_name"];
            $_SESSION["user_id"] = $user["user_id"];
          } else {
            $_SESSION["message"] = "Wrong username/password";
         
        }
       
    }
   
    redirectTo("index.php");
?>
<?php
    if(isset($connection)) {
        mysqli_close($connection);   
    }
