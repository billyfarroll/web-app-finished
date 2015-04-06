<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php require_once("functions.php"); ?>
<?php include_once("header.php"); ?>
<?php    
    if(isset($_POST["submit"])) {
        $location = ucfirst($_POST["holiday_location"]);
        $description = ucfirst($_POST["holiday_description"]);
        $rating = ($_POST["holiday_rating"]);
        $tags = ($_POST["holiday_tags"]);
        $picture = ($_POST["holiday_picture"]);
        $holuser = ucfirst($_POST["holiday_user"]);
        
        $query = "INSERT INTO holiday (holiday_location, holiday_description, holiday_rating, holiday_tags, holiday_picture, holiday_user) VALUES ('{$location}','{$description}','{$rating}','{$tags}','{$picture}','{$holuser}')";
        $result = mysqli_query($connection, $query);
        
        if($result) {
            $message = "Post added";
        } else {
            $message = "Something went wrong";
        }
    } 
?>


<link rel="stylesheet" href="normal.css" type="text/css">

        
<div class="container">            
            
            <?php $title = "Box"; ?>
            
            
            
            <?php if(isset($message)) { ?>
                
                <div class="box">
                    <p><?php echo $message; ?></p>
                </div>
            
            <?php } ?>

<div class="holiday-toggle">
    <p class="forename">Add A Holiday</p>
</div>
<div class="add-holiday">
            <form action="holidays.php" method="post">
                <p class="forename">Location:</p><input type="text" name="holiday_location" value=""/><br>
                <p class="forename">Description:</p><input type="text" name="holiday_description" value=""/><br>
                <p class="forename">Rating:</p> <select name="holiday_rating">
                <option value="">--Select--</option>
                <option value="">0</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                </select>
                <p class="forename">Tags:</p><input type="text" name="holiday_tags" value=""/><br>
                <p class="forename">Username:</p><input type="text" name="holiday_user" value=""/><br>
                <br>
                
                <p class="forename">Add an image?</p><input type="file" name="holiday_picture" id="holiday_picture"><br>
              
                <input type="submit" name="submit" value="Add"/>
            </form>
        </div>
    
<style>
body {
    background-image: url("holiday.jpg");
}
</style>

<style>

h1 {
    text-align: center;
}

p.date {
    text-align: right;
}

p.main {
    text-align: justify;
}
       
       </style>



<?php
    if(isset($_POST["submit"])) {
        echo "Location: $location " ;
        echo "Description: $description " ;
        echo "Rating: $rating /5 " ;
        echo "Tags: $tags " ;
        echo "Picture: $picture " ; 
        echo "Username: $holuser " ; 
        
    }
?>

        
<?php include_once("footer.php"); ?>  
