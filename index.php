<?php

    include_once("templates/header.php");
    
?>

<main>
    <div id="title-container">
        <h1>WMS code</h1>
        <p>Seu Blog de harware e programação</p>
    </div>
    <div id="posts-container">
        <?php foreach ($mensagens as $post): ?>
            <div class="post-box">
                <img src="img/<?= $post['img'] ?>" alt="<?= $post['title']?>">
                <h2 class="post-title">
                    <a href="posts.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                </h2>
                    <p class="post-description"><?= $post['description'] ?></p>
                <div class="tags-container">
                <?php foreach ($post['tags'] as $tags): ?>
                    <a href="#"><?= $tags ?></a>
                <?php endforeach; ?>    
                </div>    
            </div>
        <?php endforeach; ?> 
    </div>
</main>

<?php include_once("templates/folder.php"); ?>
