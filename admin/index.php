<?php

    include('includes/header.php'); 

    if(isset($_POST['login'])){
        if(!$user->loginUser()){ 
            echo "<p style='color:red; font-size:25px;'><b>Something went wrong! Please check your credentials or verify your email!</b></p>";
        }
    }

    if(!$ses->get("userLogin")){
?>

  <div class="login-container">
    <h1>Login page</h1><br>
    <h3>User access data:</h3>
    <h4>username - admin</h4>
    <h4>password - 1</h4>

    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" size="25" required /><br>
        <input type="password" name="password" placeholder="Password" size="25" required/><br>
        <input type="submit" name="login" value="Login"/>
    </form>

  </div>

<?php  
    include('includes/footer.php'); 
?>

<?php }else{ ?>
    <script>window.location="loggedin.php";</script>
<?php } ?>