<?php

include("top.php");

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $name = $_POST['name'];

    //put form contents in a text file, save text file as 'username title.txt':
    chdir("./posts");
    $newFile = "./$name $title.txt";
    $fileContent = "$title-split-$content-split-$name";
    file_put_contents($newFile, $fileContent);
}

?>

<div class='center width600'>
    <div class='post mainFont'>
        <form action='createPost.php' method='POST'>
            <label>Title:</label>
            <input class="form" type="text" name="title">
            
            <label>Content:</label>
            <textarea class="form" name="content" rows="32"></textarea>
            
            <label>Name:</label>
            <input class="form" type="text" name="name">

            <input type="submit" name="submit" value="POST">
    </div>
</div>

<?php

include("bottom.php");

?>