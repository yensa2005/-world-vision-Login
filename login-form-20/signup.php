<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg); background-repeat: no-repeat;
  background-position: right top;
  background-attachment: fixed;">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-1">
                    <h2 class="heading-section" style="font-size: 50px; font-weight:700">Sign Up</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>

                        <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                        <?php } ?>
                        <form action="signup-check.php" method="post" class="signin-form">
                            <div class="form-group text-center" style="position: relative;">
                                <span class="img-div">
                                    <div class="text-center img-placeholder" onClick="triggerClick()">
                                        <h5>Update image</h5>
                                    </div>
                                    <img src="uploads/tải xuống.png" onClick="triggerClick()" id="profileDisplay">
                                </span>
                                <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage"
                                    class="form-control" style="display: none;">
                            </div>
                            <div class="form-group">
                                <?php if (isset($_GET['name'])) { ?>
                                <input type="text" name="name" class="form-control" placeholder="Name" required
                                    value="<?php echo $_GET['name']; ?>">
                                <?php }else{ ?>
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                                <?php }?>
                            </div>
                            <div class="form-group">
                                <?php if (isset($_GET['uname'])) { ?>
                                <input type="text" name="uname" class="form-control" placeholder="User Name" required
                                    value="<?php echo $_GET['uname']; ?>">
                                <?php }else{ ?>
                                <input type="text" name="uname" class="form-control" placeholder="User Name" required>
                                <?php }?>
                            </div>
                            <div class="form-group">
                                <input id="password-field" name="password" type="password" class="form-control"
                                    placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" name="re_password" type="password" class="form-control"
                                    placeholder="Retype Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                            </div>
                            <a href="index.php" class="already">Already have an account?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
    .already {
        display: flex;
        justify-content: center;
        color: white;
    }

    .already:hover,
    .already:focus {
        color: #fbceb5;
    }

    #profileDisplay {
        display: block;
        height: 150px;
        width: 150px;
        margin: 0px auto;
        border-radius: 50%;
    }

    .img-placeholder {
        width: 150px;
        color: white;
        height: 150px;
        background: black;
        opacity: .7;
        border-radius: 50%;
        z-index: 2;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        display: none;

    }

    .img-placeholder h5 {
        margin-top: 40%;
        color: white;
        font-size: 15px;
    }

    .img-div:hover .img-placeholder {
        display: block;
        cursor: pointer;
    }
    </style>
    <script>
    function triggerClick(e) {
        document.querySelector('#profileImage').click();
    }

    function displayImage(e) {
        if (e.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
    }
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>