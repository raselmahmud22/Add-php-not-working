<?php 
include 'db.php'; 
$sql="select* from tasks";
$rows =$db->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>To Do List Project</title>
  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
<div class="container">
<div class="row" style="margin-top:70px;">
<center> <h1>To Do List </h1></center>
<div class="col-md-10 col-md-offset-1 ">

<table class="table">
<button type="button" class="btn btn-success" data-target="#myModal" data-toggle="modal">Add Task </button>
<button type="button" class="btn btn-primary pull-right ">print </button>
<hr>
<br>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Task</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="add.php">
        <div class="form-group"> 
        <label for=""> Task Name </label>
        <input type="text" required name="task" id="" class="form-control" placeholder="Type Here">
         </div>
         <input type="submit" name="send "value="Add task" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Task</th>
      
    </tr>
  </thead>


  <tbody>
    <tr>
    <?php while ($row =$rows-> fetch_assoc()): ?>
    
    
     <th> <?php  echo $row['ID']?> </th> 
      <td class="col-md-10"><?php  echo $row['Name'];?></td>
        <td> <a href="" class="btn btn-success">Edit</a>  </td>

      <td> <a href="" class="btn btn-danger">Delete</a>  </td>
      
    </tr>
  <?php endwhile ; ?>
 
  </tbody>

</table>

</div>
</div>

</div>





   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
</body>
</html>