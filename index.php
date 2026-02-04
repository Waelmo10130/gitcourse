<?php session_start(); ?>
<?php include("core/session.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-container">
        <h2>Welcome Back 👋</h2>

        <form action="login.php" method="POST">
            <?php if(isset($_SESSION["errors"])) : ?>
                <?php foreach(sessionGet("errors") as $error) :?>
                    <div class="alert"><?php echo $error; ?></div>
                <?php endforeach ?>
            <?php endif; ?>
            <?php removeSession("errors"); ?>
            <div class="input-box">
                <input type="text" name="username" >
                <label>Username</label>
            </div>

            <div class="input-box">
                <input type="email" name="email" >
                <label>E-mail</label>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
