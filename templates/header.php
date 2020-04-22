<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Forum panel</title>
</head>
<body>
    <header class="col-xs-12 col-sm-8 col-md-12">
        <nav class="navbar navbar-light bg-light">
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="#" class="navbar-brand">Home</a></li>
            </ul>
            <div>
                <form class="btn-group" action="temples/login.inc.php" method="POST">
                    <input type="text" name="uEmail" placeholder="E-mail...">
                    <input type="password" name="uPass" placeholder="Password...">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <form class="btn-group" action="temples/logout.inc.php" method="POST">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>
                <a class="btn" href="signup.php">Signup</a>
            </div>
        </nav>
    </header>