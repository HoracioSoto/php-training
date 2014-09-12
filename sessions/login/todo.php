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
<?php if (isset($_SESSION['name']) && isset($_SESSION['pass'])):?>
<div id="logmsk" style="display: block;">
    <div id="userbox">
        <h1 id="signup" style="background-color: rgb(118, 171, 219); background-position: initial initial; background-repeat: initial initial;">To do list</h1>
        <form action="login.php" method="POST" id="form-login">
            <div class="form-group">
                <input type ="text" class="inline-input" id="task" name="task" placeholder="New task" >
                <button class="inline-button">Add</button>
            </div>
        </form>
        <ul>
            <li>Vacation planing</li>
            <li>Meeting client</li>
            <li>Coding</li>
        </ul>
    </div>
</div>
<?php else: ?>
<?php Header('Location: index.php'); ?>
<?php endif; ?>
<script src="js/index.js"></script>
</body>

</html>
