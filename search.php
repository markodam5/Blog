<?php

/* 
 *  This is the search content module.
 *  This page expects to receive $_GET['search'].
 */

    include('config.php');
    include('includes/header.php');

    $db = new Database;
    // Validation:
        if(isset($_GET['search']) && ($_GET['search'] !='' ) ){
            $q = $_GET['search'];
            mb_strtolower($q);

            // Query:
            // $title = isset($_GET['search'])?"title like '%".$_GET['search']."%'":"";
            $title = "title like '%".$q."%'";
            // $query = mysqli_query($conn,"select * from posts where {$title}");
            $query ="select * from posts where {$title}";
            $result = $db->select($query);
            // mysqli_num_rows:
            if($result){
                $i=1;
                // Show Results:
                while($rw=$result->fetch_object()) : 
                    $i++;
?>
                    <div class="item">
                        <h2><?php echo $rw->title; ?></h2>
                        <img src="images/<?php echo $rw->image; ?>" alt="" style="width:200px; height:auto">
                        <p class="truncate"><?php echo $rw->content; ?></p>
                        <!-- <a href="details.php?id=<?php echo $rw->id; ?>">Read More...</a> -->
                    </div>
<?php
                endwhile;
            }else{
                echo "This result doesn't match anithing";
            }
        }else{
            echo "This result doesn't match anithing";
        }

        include('includes/footer.php');

?>


