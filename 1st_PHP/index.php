<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="includes/formhandle.php" method="POST">
        <label for="name">Username</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
        <label for="menu">Select a value</label>
        <select name="menu" id="menu">
            <option value="One">One</option>
            <option value="Two">Two</option>
            <option value="Three">Three</option>
            <option value="Four">Four</option>
        </select>
        <input type="submit" value="Login" class="btn">
    </form>
</body>
</html>