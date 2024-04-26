<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['email'] = $email;
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .flex-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        .card header {
            background-color: #40E0D0;
            border-radius: 8px 8px 0 0;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] 
        
        {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #40E0D0;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2bb9b0;
        }

        input:focus {
            outline: blue;
            border-color: #40E0D0;
        }
    </style>
</head>
<body>
<div class="flex-container">
    <div class="card">
        <header>
            <h2>Login Form</h2>
        </header>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-control">
                <input type="text" name="first_name" placeholder="First Name">
            </div>

            <div class="form-control">
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="form-control">
                <input type="password" name="password" placeholder="Password">
            </div>

            <div class="form-control">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</div>
</body>
</html>
