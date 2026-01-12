<?php
  require_once($_SERVER['DOCUMENT_ROOT'] ."/blog/config.php");
  $user = new User();
  $ses = new Session();
  $ses->start();
  
// Make a new object of the Posts class:
$post = new Posts();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="../assets/style.css">
		<link rel="stylesheet" type="text/css" href="../assets/form.css">
		<title></title>
	</head>

<body>
	<div id="wrapper">
    
      <!-- Page Content: -->
    <div id="sub-wrapper">
      <div id="main">
        <div id="add">
        <?php if($ses->get("userLogin")){ ?>
        <div id="header">
            <h1>Welcome to admin panel</h1><a href="logout.php">Logout</a><br><br>
            <p>
              This is representing project with CRUD operations, in this project I'm showing how to update delete and insert post with object code and crud operations.
            </p>
            <a href="../index.php">Back to Index page</a>
        </div>
            <h2>List of posts content:</h2>
            <!-- Post Content: -->

            <form action="" method="post">
              Select Category:
              <select onchange="window.location='categories.php?cid='+this.value" name=selCategory>
                <option value="-1">Select category</option>
                  <?php $categories = $post->getAllCategories(); 
                  while($result = $categories->fetch_object()){
                  ?>
                <option value="<?php echo $result->category_id; ?>"><?php echo $result->category_title; ?></option>
              
                <?php } ?>
                </select><br><br>

                <a href="insert_post.php">INSERT NEW POST</a><br><br>
            </form>

        <?php } ?>