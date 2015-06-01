<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form action="checkLogin.php" method="post">
    Username: <br> <input type="text" name="username" id="username"/><br/><br/>
    Password: <br> <input type="password" name="password" id="password"/><br/><br/>
    <?php if(isset($_GET['erro'])) { ?>
       <h5><?=$_GET['erro']?></h5>
    <?php } ?>
    <input type="submit" value="Entrar" name="login"/>
</form>
</body>
</html>