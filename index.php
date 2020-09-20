<?php

include("top.php");
include("welcomePost.php");

//Create an array of all the text files (posts):
$files2 = glob("./posts/" . "*");

//Loop through each text file (post) then neatly echo out the contents:
foreach ($files2 as $post) {
    $content = file_get_contents($post);
    $contentArray = explode("-split-",$content,4);
    $title = $contentArray[0];
    $text = $contentArray[1];
    $username = $contentArray[2];
    $id = $contentArray[3];

    echo "
    <div class='center width600'>
        <div class='post'>
            <p class='mainFont titleFont'>$title</p>
            <p class='mainFont'>$text</p>
            <p class='mainFont'>$id</p>
            <p class='mainFont usernameFont'>$username</p>
        </div>
    </div>";
}

include("bottom.php");

?>