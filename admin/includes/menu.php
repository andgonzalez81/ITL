<?php
 $type_user=$_SESSION['type']; 
 $username = $_SESSION['other_name'];
 
?>
<ul id="mainNav">
 <li><a href="index.php" <?php if ($curr_page == "index.php") echo "class='active'" ?>>Content Administration</a></li>
 <li><a href="documents.php" <?php if ($curr_page == "documents.php") echo "class='active'" ?>>Documents Administration</a></li>
 <?php
  if ($type_user==1)
  {
   ?>
    <li><a href="users.php" <?php if ($curr_page == "users.php") echo "class='active'" ?>>Users Administration</a></li>
   <?php 
  }
 ?>
 <li class="logout"><a href="logout.php">WELCOME <?=strtoupper($username) ?> - LOGOUT</a></li>
</ul>