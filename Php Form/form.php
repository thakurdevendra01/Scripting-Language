<html>

<head>
    <title>Form in Php</title>
    <style>
    body {
        font-family: Arial;
        background-color: lightgray;
    }

    .form-container {
        width: 350px;
        margin: auto;
        margin-top: 50px;
        padding: 20px;
        background-color: aqua;
        border: 1px solid black;
        border-radius: 10px;
    }

    h1 {
        text-align: center;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 5px;
    }

    input[type="submit"],
    input[type="reset"],
    input[type="button"] {
        padding: 5px 10px;  
    }

    a {
        margin-left: 10px;
        text-decoration: none;
    }
    </style>
</head>

<body>
    <div class="form-container">
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
            <input type="button" value="View" onclick="window.location.href='view.php'">

            <a href="view.php">View Data</a>

        </form>
    </div>
</body>

</html>