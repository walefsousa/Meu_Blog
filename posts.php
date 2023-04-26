<?php

include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postID = $_GET['id'];
    $currentPost = "";
    foreach ($mensagens as $post) {

        if ($post['id'] == $postID) {
            $currentPost = $post;
        }
    }
}   

?>

<main id="post-container"> 
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque incidunt placeat delectus numquam commodi asperiores et minima. Quae error repellat fugiat aspernatur culpa vero, quidem eaque! Eligendi molestias repellat rerum!
            Sint labore autem nisi beatae accusamus perspiciatis eaque ipsum distinctio. Nesciunt suscipit, quo voluptas veniam dolorum porro labore unde architecto iste omnis, qui, inventore ex sit magnam temporibus rem ea.
            Incidunt inventore voluptates, debitis quas sed natus quos maiores accusamus neque beatae excepturi consequatur fugiat facilis. Earum, voluptatibus, nulla doloribus, pariatur veritatis laudantium dicta facilis harum debitis cum tenetur. Nobis!
            Praesentium cumque quae iusto? Sunt iste enim modi rem non harum incidunt debitis, magni obcaecati! Accusantium, eius. Neque quisquam iste fugiat consequatur itaque distinctio ad, nihil, quod dolorem illum nobis.
            Optio, reprehenderit. Beatae rerum dolores id, ut eligendi vitae voluptatibus quos ratione nihil soluta doloribus itaque quo dicta nesciunt, aut enim. Aliquid praesentium quae eaque dicta, atque sequi officiis quibusdam!
        </p> 
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tags) : ?>
               <li><a href="#"><?= $tags ?></a>
               <li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categorias as $category) : ?>
                <li><a href="#"><?= $category ?></a><li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>


<?php include_once("templates/folder.php"); ?>