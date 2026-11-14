<?php

	// Make a new object of the Posts class:
	$post = new Posts();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="assets/style.css">
		<link rel="stylesheet" type="text/css" href="assets/form.css">
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Web Notes</title>
	</head>

<body>
	<div id="wrapper">
		<div id="header">
			<div id="sub-header">
				<div id="logo">
					<h1>Web Notes</h1>
					<p>Practical ideas for building on the web.</p>
				</div> <!-- End of logo -->
				
				<div id="nav">
					<ul>
						<li><a href="./">All Posts</a></li>

						<?php $categories = $post->getAllCategories(); 
							while($result = $categories->fetch_object()){
						?>

						<li>
							<a href="categories.php?cat=<?php echo $result->category_id; ?>"><?php echo $result->category_title; ?></a>
						</li>

						<?php } ?>
						
						<li><a href="admin" target="_blank">Admin panel</a></li>
					</ul>
				</div> <!-- end of nav -->

				<form method="get" id="searchform" action="search.php">
					<fieldset> 
						<input type="text" name="search" id="inputSearch" value="" placeholder="Search for Posts"> 
						<button id="search-image" class="sbutton" type="submit" value=""> 
							<i class="fa fa-search"></i> 
						</button>
					</fieldset>
				</form><!-- End of search form -->
			</div><!-- end of #sub-header -->
		</div><!-- end of #header -->

		 <!-- Page Content: -->
		<div id="sub-wrapper">
			<div id="main">
				<div id="sub-main">
					<section class="page-intro" aria-labelledby="page-title">
						<p class="eyebrow">Web development, without the noise</p>
						<h2 id="page-title">Ideas and guides for the modern web</h2>
						<p>Explore practical notes on programming, tools, and the technology behind the websites we use every day.</p>
  					</section>
					<div class="section-heading">
						<h2 id="articles-title">Latest articles</h2>
						<p>Fresh ideas from the blog</p>
    				</div>
				
	<?php
	// PAGINATION ===========================================================================

		$display = 5;

		// Determine how many pages there are...
		if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.
			$pages = $_GET['p'];
		} else { // Need to determine.

			// Count the number of records:
			// $post is istance of class Posts
			$getCount = $post->count();
			$row = $getCount->fetch_row();
			$records = $row[0];

			// Calculate the number of pages...
			if ($records > $display) { // More than 1 page.
				$pages = ceil ($records/$display);
			} else {
				$pages = 1;
			}

		} // End of p IF.

		// Determine where in the database to start returning results...
		if (isset($_GET['s']) && is_numeric($_GET['s'])) {
			$start = $_GET['s'];
		} else {
			$start = 0;
		}

?>

