<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        .login-button {
            display: inline-block;
            margin: 10px;
            padding: 20px 40px;
            font-size: 18px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <button class="login-button">Student Login</button>
        <button class="login-button" onclick="redirectToFacultyLogin()">Faculty Login</button>
    </div>

    <script>
        function redirectToFacultyLogin() {
            // Redirect to the specified URL when Faculty Login button is clicked
            window.location.href = "http://localhost/Ninu/facultylog.php";
        }
    </script>
</body>

</html>
