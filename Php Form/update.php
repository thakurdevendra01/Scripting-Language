<!DOCTYPE html>
<html>
<head>
    <title>Update Form in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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

        h2 {
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
            margin-bottom: 10px;
        }

        input[type="submit"],
        input[type="reset"],
        input[type="button"] {
            padding: 5px 10px;
            margin-top: 10px;
        }

        a {
            margin-left: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <!-- Pass the ID in query string -->
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="post">
            <h2>Update Details</h2>

            <label for="name">Name:</label>
            <input type="text" name="fname" id="name" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="password">Password:</label>
            <input type="password" name="pwd" id="password" required><br>

            <input type="submit" value="Update">
            <input type="reset" value="Reset">
            <input type="button" value="Back" onclick="window.location.href='view.php'">
        </form>
    </div>
</body>
</html>
