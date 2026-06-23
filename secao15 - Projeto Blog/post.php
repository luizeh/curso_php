<?php
include_once("templates/header.php");
if(isset($_GET['id'])){
$postid = $_GET['id'];
$currentPost = null;
foreach($posts as $post){
    if($post['id'] == $postid){
        $currentPost = $post;
    }
}
}

?>
<main id="post-container">
    <div class="content-container">
        <h1><?= $currentPost['title'] ?></h1>
        <p><?= $currentPost['description'] ?></p>
        <div class="img">
            <img src="<?= $BASE_URL ?>imgs/<?= $currentPost['img'] ?>" alt="<?= $currentPost['description'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus eligendi velit enim quasi voluptates ipsam dolorem odio nesciunt, deserunt dicta id excepturi impedit molestiae libero totam similique reiciendis officiis facere.
        Facere aspernatur reprehenderit libero asperiores unde aliquid eum, itaque sed excepturi atque sequi tenetur nulla fuga esse! Aliquam molestias earum quo error, voluptatem consectetur nostrum, corrupti iusto ducimus cum fugiat?
        Laboriosam illum obcaecati deleniti consectetur quaerat porro iusto ullam aut assumenda. Reprehenderit asperiores officia vitae, deserunt quaerat aliquam sint! Laboriosam est dolore maiores itaque nostrum molestiae, architecto necessitatibus ipsa porro.
        Possimus accusamus similique impedit, repudiandae quam eligendi vitae ad inventore quidem nostrum et explicabo vel quasi maiores sapiente quos, facere eos, ut cupiditate quia odit earum. Blanditiis optio sunt hic!
        Consectetur, reprehenderit eum! Deleniti, quia? Nulla consequatur eos dolorem. Corporis, nam. Delectus doloremque beatae corporis sapiente, dolore aliquam tenetur eveniet dolorum eligendi iste ullam fugit explicabo similique nobis. Voluptatem, ea!</p>
           <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus eligendi velit enim quasi voluptates ipsam dolorem odio nesciunt, deserunt dicta id excepturi impedit molestiae libero totam similique reiciendis officiis facere.
        Facere aspernatur reprehenderit libero asperiores unde aliquid eum, itaque sed excepturi atque sequi tenetur nulla fuga esse! Aliquam molestias earum quo error, voluptatem consectetur nostrum, corrupti iusto ducimus cum fugiat?
        Laboriosam illum obcaecati deleniti consectetur quaerat porro iusto ullam aut assumenda. Reprehenderit asperiores officia vitae, deserunt quaerat aliquam sint! Laboriosam est dolore maiores itaque nostrum molestiae, architecto necessitatibus ipsa porro.
        Possimus accusamus similique impedit, repudiandae quam eligendi vitae ad inventore quidem nostrum et explicabo vel quasi maiores sapiente quos, facere eos, ut cupiditate quia odit earum. Blanditiis optio sunt hic!
        Consectetur, reprehenderit eum! Deleniti, quia? Nulla consequatur eos dolorem. Corporis, nam. Delectus doloremque beatae corporis sapiente, dolore aliquam tenetur eveniet dolorum eligendi iste ullam fugit explicabo similique nobis. Voluptatem, ea!</p>
       
    </div>
</main> 
<aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                    <a href="#"><?= $tag ?></a>
                    <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
             <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                    <a href="#"><?= $category ?></a>
                    <?php endforeach; ?>
            </ul>
</aside>
<?php
include_once("templates/footer.php")
?>