<?php

if (!isset($_COOKIE["user"])) {
    header("Location: log.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head><title>Welcome</title></head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_COOKIE["user"]); ?>!</h2>
    <p>You are logged in using cookies.</p>
    <a href="log.php">Logout</a>
</body>
</html>
