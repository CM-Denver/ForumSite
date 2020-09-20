<?php

include('top.php');

$searchItem = $_REQUEST['search'];

//Convert to lowercase because post title will be converted to lowercase:
$searchItem = strtolower($searchItem);

//Create an array of all the text files (posts):
$files = glob("./posts/" . "*");

//loop through each text file (post):
foreach ($files as $post) {
    $content = file_get_contents($post);
    $contentArray = explode("-split-",$content,4);
    $title = $contentArray[0];
    $text = $contentArray[1];
    $username = $contentArray[2];
    $id = $contentArray[3];

    //Convert to lowercase because searchItem will be lowercase:
    $titleLower = strtolower($title);

    //Check if post's title contains search item, if it does then display post:
    if (strpos($titleLower, $searchItem) !== false) {
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
    
}


include('bottom.php');

?>