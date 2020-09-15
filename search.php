<?php

include('top.php');

$searchItem = $_REQUEST['search'];

//Create an array of all the text files (posts):
$files = glob("./posts/" . "*");

//loop through each text file (post):
foreach ($files as $post) {
    $content = file_get_contents($post);
    $contentArray = explode("-split-",$content,3);
    $title = $contentArray[0];
    $text = $contentArray[1];
    $username = $contentArray[2];

    //Check if post's title contains search item, if it does then display post:
    if (strpos($title, $searchItem) !== false) {
        echo "
        <div class='center width600'>
            <div class='post'>
                <p class='mainFont titleFont'>$title</p>
                <p class='mainFont'>$text</p>
                <p class='mainFont usernameFont'>$username</p>
            </div>
        </div>";
    }
    
}


include('bottom.php');

?>