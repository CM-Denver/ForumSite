<?php

include("top.php");

$correctPassword = "why";

if (isset($_POST['submit'])){
    $ids = $_POST['ids'];
    $password = $_POST['password'];
    
    //Confirm that password matches the correct password:
    if($password == $correctPassword){
        $postsArray = explode(" ",$ids,1000000000000);
        
        //delete requested files (posts):
        chdir('./posts');
        foreach($postsArray as $id) {
            unlink("./$id.txt");
        }
    }
}

?>

<div class='center width600'>
    <div class='post mainFont'>
        <form action='delete.php' method='POST'>
            <label>Post IDs:</label>
            <textarea class="form" name="ids" rows="32"></textarea>
            
            <label>Password:</label>
            <input class="form" type="password" name="password">

            <input type="submit" name="submit" value="delete posts">
    </div>
</div>

<?php

include("bottom.php");

?>