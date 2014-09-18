<!DOCTYPE html>
<html>
<?php session_start();?>
<head>

  <meta charset="UTF-8">

  <title>Sign Up/Login Box - CodePen</title>

  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
<?php if (!isset($_SESSION['name']) || !isset($_SESSION['pass'])):?>
<div id="logmsk" style="display: block;">
    <div id="userbox">
        <?php if (isset($_GET['error'])):?>
           <p> <?php echo $_GET['error'] ?> </p>
        <?php endif?>
        <h1 id="signup" style="background-color: rgb(118, 171, 219); background-position: initial initial; background-repeat: initial initial;">Sign up</h1>
        <form action="signup.php" method="POST" id="form-signup">
            <input id="name" name="name" placeholder="ID" style="opacity: 1; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">
            <input id="pass" name="password" type="password" placeholder="Password" style="opacity: 1; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">
            <input id="duplicated_password" name="duplicated_password" type="password" placeholder="Confirm Password" style="opacity: 1; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">
            <input type="submit" id="signupb" style="cursor: default; text-align: center" value="Sign Up"/>
        </form>
        <a href="index.php" class="signup">Log In</a>
    </div>
</div>
<script src="js/index.js"></script>
<?php else: ?>
<?php Header('Location: todo.php');?>
<?php endif; ?>
</body>

</html>