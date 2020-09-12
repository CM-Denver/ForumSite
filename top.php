<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Site</title>
</head>
<body>

    <div class="menu">
        <img class="center menuImage" src="images/fs.png" onclick="login('./index.php');">
        <input class="search" type="text">
        <img class="center loginButton" src="images/login.png" onclick="login('./createPost.php');">
    </div>

    <img class="menuImage center" src="images/fs.png">

    <script>
        function login(url) {
            window.location.href = url;
        }
    </script>