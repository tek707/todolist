
<?php  include_once 'conn.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO-DO-LIST</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
</head>
<body>
<?php
$result = $mysqli->query("SELECT * FROM list ORDER BY date ASC" )or die ($mysqli->error);
?>
  <div class="container">

    <div class="heading">
 To-Do-List
 <hr>
    </div>
    <?php
    while ($row =$result->fetch_assoc()): ?>
   
  
   

  




    <div class="mainpage">
<div class="lstcontent">
  <!-- div for edit and delete -->
  <div class="editlist">
  <a href="?edit=<?php echo $row['list_id']; ?>">  <button name="Update" class="cmdicons"> <img src="edit.png" alt="edit"></button></a>
   
  
  
  <a href="conn.php?delete=<?php echo $row['list_id']; ?>"><button name="delete" class="cmdicons"><img src="delete.png" alt="delete"></button></a>
    </div>
    <br>
   <!-- main content -->
    <p class="typo"><?php echo $row['item']; ?>   </p> 
<br>
<p class="date"> <?php echo $row['date']; ?>  </p> 

  </div>

    </div>
    <?php endwhile; ?>
    <!-- div for input box and send btn -->

    <?php 
        //edit button php function
        if(isset($_GET['edit'])){
          $list_id = $_GET['edit'];
         
            $update = true;
             $Res=$mysqli->query("SELECT * FROM `list` WHERE `list_id`=$list_id") or die($mysqli->error);
           
             if ($Res->num_rows == 1) {
              $r= mysqli_fetch_array($Res);
             
               $item = $r['item'];
            }
        
          }else{
          
            $item = "";
          }
        
        ?>
      


    <div class="listcreater">
      <form action="conn.php" method="post">
      <input type="hidden"  name="list_id" value="<?php echo $list_id ; ?>">

      <input type="text" class="listcont" name="item" value="<?php echo $item ; ?>" required>


      <?php 
if ($update == true):
?>
  <button type="submit" name="Update" class="send" value="Update" id="Update"><img src="send.png" alt="submit"></button>

<?php else :?>
  <button type="submit" name="send" class="send" value="send" id="send"><img src="send.png" alt="submit"></button>


  <?php  endif; ?>
</form>
    </div>
  </div>  
</body>
</html>