<?php
    
    function redirectTo($newLocation) {
        header("Location: " . $newLocation);
        exit;
    }
?>
