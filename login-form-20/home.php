<?php 
session_start();
include "db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!doctype html>
<html>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg); background-repeat: no-repeat;
  background-position: right top;
  background-attachment: fixed;">
    <?php 
    $sql = "SELECT * FROM login WHERE id = '".$_SESSION['id']."' "; 
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    while ($profileImage = mysqli_fetch_assoc($result)) {  ?>

    <div class="alb">
        <img src="uploads/<?=$profileImage['image']?>">
    </div>

    <?php } }?>
    <div class="content">
        <h1 class="title">Hello, <?php echo $_SESSION['name']; ?></h1>
        <p>Thank you for logging in!</p>
        <a href="logout.php" class="btn btn-light">Logout<i class="bi bi-box-arrow-right"></i></a>
    </div>

</body>
<style>
.title,
p {
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
    margin-left: auto;
    margin-right: auto;
    width: 100px;
    display: block;
    align-content: center;
}

.btn-light:hover,
.btn-light:focus {
    color: #fff;
    background-color: #dc3545;
    box-shadow: 3px 3px white;
}

.alb {
    width: 200px;
    height: 200px;
    padding: 5px;
    margin-left: auto;
    margin-right: auto;
}

.alb img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
}
</style>

</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>