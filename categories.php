<?php
    include_once "config.php";
    include('includes/header.php'); 
?>
 
<!-- Post Content: -->
<?php
  $cat = $_GET['cat'];
  $getPosts = $post->getPostByCategory($cat);
  while($result = $getPosts->fetch_object()){
?>

  <div class="item">
      <h2><?php echo $result->title; ?></h2>
      <img src="images/<?php echo $result->image; ?>" alt="">
      <p class="truncate"><?php echo $result->content; ?></p>
      <a href="details.php?id=<?php echo $result->id; ?>">Read more...</a>
  </div>

<?php } ?>

<br><br>

<?php  include('includes/footer.php'); ?>