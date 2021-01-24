<?php include 'db.php';
if(isset($_POST['send'])){
    $name =$_POST['task'];
    
 
$sql = "insert into tasks(name) values('$name')";
$var= $db ->query($sql);
 if ( $var){
     echo "<h2>Success</h2>";
 } 
}
?>