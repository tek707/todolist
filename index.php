

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
?>
  <div class="container">

    <div class="heading">
Group Chat
 <hr>
    </div>
   
<div class="scroll">

<!-- left message -->
    <div class="left mainpage"> 
<div class="left_msg">
  <div class="left_msg_head">
<img class="left_msg_avater" src="avatar.png" alt="avater"/>
                <h3 class="msg_left_username">lomi</h3>
                </div> 
   <!--left main content -->
    <p class="msg_left_text">this is other people's text</p> 
<p class="msg_left_date">  10:14pm </p> 
  </div>
    </div>
    
<!-- end of left message -->

<br>

<!-- start of right message -->

    <div class="right mainpage">
    <div class="right_msg">
    <div class="right_msg_head">
<img class="right_msg_avater" src="avatar.png" alt="avater"/>
                <h3 class="msg_right_username">Titiati</h3>
                </div> 
   <!--right main content -->
    <h3 class="msg_right_text">this is your text</h3> 
<p class="msg_right_date">  10:15pm</p> 

  </div>
    </div>

<!-- end of right message -->















    <!-- div for input box and send btn -->

  
      
      </div>

    <div class="listcreater">
      <form action="conn.php" method="post">
      <input type="hidden"  name="list_id" value="<?php echo $list_id ; ?>">

      <input type="text" class="listcont" name="item"  required>


     
  <button type="submit" name="send" class="send" value="send" id="send"><img src="send.png" alt="submit"></button>


</form>
    </div>
  </div>  
</body>
</html>