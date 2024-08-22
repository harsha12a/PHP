<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <div class="profile-container">
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                $name = htmlspecialchars($_POST["name"]);
                $pass = htmlspecialchars($_POST["email"]);
                $menu = htmlspecialchars($_POST["menu"]);

                if(!empty($name)) {
                    echo "<h2>Profile Details</h2>";
                    echo "<div class='profile-info'>";
                    echo "<p><span>Username:</span> " . $name . "</p>";
                    echo "<p><span>Email:</span> " . $pass . "</p>";
                    echo "<p><span>Selected Option:</span> " . $menu . "</p>";
                    echo "</div>";
                } else {
                    echo "<p>Please enter your details.</p>";
                }
            }
        ?>
    </div>
</body>
</html>
