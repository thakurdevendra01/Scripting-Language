<html>
    <head><title>Form in Php</title></head>
    <body>
        <form action="insert.php" method="post">
            <h1>Form</h1>
            <label for="name">Name:</label>
            <input type="text" name="fname" id="name"><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email"><br><br>

            <label for="password">Password:</label>
            <input type="password" name="pwd" id="password"><br><br>

            <input type="submit" value="Register">
            <input type="reset" value="Reset">
            <a href="view.php">View Data</a>
        </form>
    </body>
</html>