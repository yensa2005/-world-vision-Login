<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!doctype html>
<html>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <div class="content">
        <h1 class="title">Hello, <?php echo $_SESSION['name']; ?></h1>
            <p>Thank you for logging in!</p>
            <a href="logout.php" class="btn btn-light">Logout</a>
    </div>
</body>
<style>
body {
    display: flex;
    align-items: center;
    justify-content: center;
}

.title, p {
    display: flex;
    color: #fff;
    justify-content: center;
}

.btn-light {
    color: #dc3545;
    background-color: #fff;
    padding: 5px 20px;
    border-radius: 5px;
    text-decoration: none;
    display: flex;
    justify-content: center;
}

.btn-light:hover,
.btn-light:focus {
    color: #fff;
    background-color: #dc3545;
    box-shadow: 3px 3px white;
}
</style>

</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>