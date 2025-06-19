<!DOCTYPE html>
<html>
<head>
    <title>Login System</title>
</head>
<body>
    <h1>Login System</h1>
    <form action="auth.php" method="post">
        <label for="username">Name:
            <input type="text" name="username" required>
        </label>
        <br><br>
        <label for="password">Password:
            <input type="password" name="password" required>
        </label>
        <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
