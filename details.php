<?php
require_once($_SERVER['DOCUMENT_ROOT'] ."/blog/config.php");
include('includes/header.php');

$post = new Posts();
      
	$post_id = is_numeric($_GET['id'])?$_GET['id']:1;
	$getpost = $post->getPostById($post_id);
	$result = mysqli_fetch_object($getpost);

?>
<!-- Post Content: -->          
<div class="item">
  <h2><?php echo $result->title; ?></h2>
  <img src="images/<?php echo $result->image; ?>" alt="" style="width:200px; height:auto">
  <p><?php echo $result->content; ?></p>
</div>

<?php  include('includes/footer.php'); ?>