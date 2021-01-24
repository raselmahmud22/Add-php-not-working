<?php 
$db= new mysqli();
$db -> connect('localhost','root','','crud');
if(!$db){
    echo "Not connected";
}

?>