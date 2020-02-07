<!DOCTYPE html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <title>Visitors?!?!?!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="site.css">
</head>

<body>
    <h1 class="centered">Visitor Log</h1>
    <ul id="navbar">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="current.html">Current News</a></li>
        <li><a href="visitor-log.php">Visitor Log</a></li>
    </ul>
    <div class="content centered">
        <h2>Sign in!!!</h2>
        <form action="visitor-log.php" method="post">
            <h2>Name: <input type="text" name="name"><br></h2>
            <input type="submit">
            <?php
            if(!empty($_POST["name"]))
            {
                echo "<h2>Welcome, ".$_POST["name"]."!</h2>";
            }
            else
            {
                echo "<h2>Please enter your name.</h2>";
            }
            ?>
        </form>
    </div>
</body>
</html>