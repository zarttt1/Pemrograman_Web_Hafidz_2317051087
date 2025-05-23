<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>LOGIN</h3>
    <form action="login.php" method="post">
        <div class="mb-3">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <br>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <br>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    <a href="dashboard.php"></a>
</body>
</html>
