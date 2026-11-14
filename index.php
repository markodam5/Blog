<!-- *****INDEX.PHP TEMPLATE -->
<?php 
  include_once "config.php";
  include('includes/header.php'); 
?>

  <!-- POST CONTENT: -->
  <!-- Latest articles -->
  <div id="top-main">
      <?php
        // The Second part of HTML included in this page:
        // method getAllPosts() is defined in the Post class:
        $getPosts = $post->getLastPosts();
        while($result = $getPosts->fetch_object()){
      ?>
      <div class="item">
        <h4><?php echo $result->title; ?></h4>
        <img src="images/<?php echo $result->image; ?>" alt="">
        <p class="truncate"><?php echo $result->content; ?></p>
        <a href="details.php?id=<?php echo $result->id; ?>">Read More...</a>
      <!-- <br> -->
      </div>

      <?php } // End of WHILE loop ?>
      
  </div>


  <?php 
    include('includes/footer.php'); 
  ?>



