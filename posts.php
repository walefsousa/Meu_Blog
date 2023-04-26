<?php
    
    include_once("templates/header.php");
    
    if(isset($_GET['id'])){
        
        $postID = $_GET['id'];
        $currentPost = "";
        foreach($mensagens as $post){
            
            if($post['id'] == $postID){
                $currentPost = $post;
            }
        }
    }

?>

<h1><?= $currentPost['title'] ?></h1>

<?php include_once("templates/folder.php"); ?>
