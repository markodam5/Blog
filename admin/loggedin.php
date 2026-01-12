<?php

  include('includes/header.php'); 
  
  if(!$ses->checkSession() && !$ses->checkLogin()){
    header("location: index.php");
  }

// check $_GET['delpost'] parameter for deleting the post:
// $_GET['delpost'] is from this page:
  if(isset($_GET['delpost'])){
    $id = $_GET['delpost'];
    $delPost = $post->delPostById($id);
  }

// Show the message if isset $delPost:
  if(isset($delPost)){
    echo $delPost;
  }
      
?>


</body>
</html>