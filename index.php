<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php require_once("functions.php"); ?>
<?php include_once("header.php"); ?>



<?php    
    if(isset($_POST["submit"])) {
        $forename = ucfirst($_POST["user_forename"]);
        $surname = ucfirst($_POST["user_surname"]);
        $dob = ($_POST["user_dob"]);
        $city = ucfirst($_POST["user_city"]);
        $username = ucfirst($_POST["user_name"]);
        $password = ($_POST["user_password"]);
        
        $query = "INSERT INTO users (user_forename, user_surname, user_dob, user_city, user_name, user_password) VALUES ('{$forename}','{$surname}','{$dob}','{$city}','{$username}','{$password}',)";
        $result = mysqli_query($connection, $query);
        
        if($result) {
            $message = "Post added";
        } else {
            $message = "Something went wrong";
        }
    } 
?>
   
<link rel="stylesheet" href="normal.css" type="text/css"> 

<div class="login-toggle">
    <p11 class="forename">Login</p11>
</div>
        <div class="login-box">
            <form action="login.php" method="post">
                <p1 class="forename">Username:</p1> <input type="text" name="username" value="" /> <br>
                <p2 class="forename">Password:</p2> <input type="password" name="password" value="" /> <br>
                <br>
                <input type="submit" name="login" value="Login" />
            </form>
            <p3 class="forename">Don't have an account? <a href=register.php>Register</a> </p3>
        </div>

 <div class="register-toggle">
     <p4 class="forename">OR <br> Register</p4>
</div>
     <div class="register">
            <form action="index.php" method="post">
                <p5 class="forename">Forename:</p5><input type="text" name="user_forename" value=""/><br>
                <p6 class="forename">Surname:</p6><input type="text" name="user_surname" value=""/><br>
                <p7 class="forename">Date Of Birth:</p7><input type="text" name="user_dob" value=""/><br>
                <p8 class="forename">City:</p8><input type="text" name="user_city" value=""/><br>
                <p9 class="forename">Username:</p9><input type="text" name="user_name" value=""/><br>
                <p10 class="forename">Password:</p10><input type="text" name="user_password" value=""/><br>
                <br>
                <input type="submit" name="submit" value="Register"/>
                <div class=""
            </form>
            <div class="overlay black-bg">  
        </div>



      
      

<?php
    if(isset($_POST["submit"])) {
        echo "Forename: $forename " ;
        echo "Surname: $surname " ;
        echo "Date of birth: $dob " ;
        echo "City: $city " ;
        echo "Username: $username " ; 
        echo "Password: $password " ; 
        
    }
?>

<?php
    while($row = my_fetch_assoc($result)) {
        
     include 'box.php';
        
    }
?>




        
<?php require_once("footer.php"); ?>
