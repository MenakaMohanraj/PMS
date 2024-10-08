<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h2>Sign In</h2>
    <form action="signin_action.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Sign In">
    </form>
    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
</body>
</html>
