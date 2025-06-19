<?php
// Hardcoded credentials
$valid_user = "admin";
$valid_pass = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if ($user === $valid_user && $pass === $valid_pass) {
        // Set cookie for 1 hour
        setcookie("user", $user, time() + 3600, "/");
        header("Location: wel.php");
        exit();
    } else {
        echo "<h3 style='color:red;'>Invalid login</h3>";
        echo "<a href='login.php'>Try Again</a>";
    }
}
?>
