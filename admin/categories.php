<?php
    // include_once "config.php";
    include('includes/header.php'); 
?>
 
<!-- Post Content: -->
<?php
  $cat = $_GET['cid'];
  $getPosts = $post->getPostByCategory($cat);
  while($result = $getPosts->fetch_object()){
?>

  <div>
    <h2><?php echo $result->title; ?></h2>
    <img src="../images/<?php echo $result->image; ?>" alt="" style="width:200px; height:auto">
    <p><?php echo $result->content; ?></p>
    <a href="update_posts.php?update=<?php echo $result->id; ?>">Edit Post</a>
    <!-- Deleting the post: -->
    <a onclick="return confirm('Da li ste sigurni da li zelite da obrisete ovaj post')" href="?delpost=<?php echo $selected_id; ?>" >Delete Post</a>
  </div><br><br>

<?php } ?>

<?php  include('includes/footer.php'); ?>