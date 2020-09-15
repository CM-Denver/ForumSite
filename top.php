<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Site</title>
    <link rel="icon" href="./images/fs.png">
</head>
<body>

    <div class="menu">
        <img class="center menuImage" src="images/fs.png" onclick="login('./index.php');">
        <form action='search.php' method='GET'>
            <input class="search searchBar mainFont" type="text" name='search'>
            <input class='search button mainFont' value="Search" type="submit">
        </form>
        <img class="center loginButton" src="images/login.png" onclick="login('./createPost.php');">
    </div>

    <img class="menuImage center" src="images/fs.png">

    <script>
        function login(url) {
            window.location.href = url;
        }
    </script>