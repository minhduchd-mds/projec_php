<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" action="login.php">
        <fieldset>
            <legend>Login</legend>
            <?php include('errors.php'); ?>
            <label>Username</label>
            <input type="text" name="username" >
            <label>Password</label>
            <input type="password" name="password">
            <button type="submit" class="btn" name="login_user">Login</button>
            <p>
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
        </fieldset>
	</form>
</body>
</html>