<?php
//get cookie
if(isset($_COOKIE['name'])){
    echo "<h1>Welcome back, " . $_COOKIE['name'] . "!</h1>";
} else {
    echo "<h1>Welcome!</h1>";
}
?>