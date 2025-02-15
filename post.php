<?php
include_once("templates/header.php");

if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
        if($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}

?>
    <main id="post-container">
       <div class="content-container">
         <h1 id="main-title"><?= $currentPost['title']?></h1>
         <p id="post-description"><?= $currentPost['description']?></p>
         <div class="img-container">
            <img src="<?= $BASE_URL ?>/images/<?= $post['img'] ?>" alt="<?= $currentPost['title']?>">
         </div>
          <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas deleniti beatae earum eveniet iusto veniam officiis? Repellat, nobis, sint eveniet qui voluptatibus aspernatur, maiores omnis facilis officiis cupiditate mollitia consectetur!
          Repudiandae vitae atque laudantium. Ad magnam minus qui fugiat excepturi numquam deserunt nobis eveniet? Odit harum reiciendis numquam, alias natus eius odio quaerat, error cupiditate ab vitae iusto porro culpa?
          Laudantium quasi, dolores doloribus itaque maiores voluptate commodi in ex tempore at, suscipit illo amet culpa eos? Odit ex dolorem necessitatibus harum earum, eum, perferendis, sed deserunt corrupti magnam quasi.
          Voluptatum deserunt laudantium totam. Non dolore fuga illo maiores placeat commodi nihil accusamus iste repudiandae adipisci! Consectetur impedit, beatae dolore mollitia nostrum rem asperiores illo quo libero non ab possimus?
          Neque, cumque eaque ducimus laboriosam facilis at fugiat, reiciendis blanditiis expedita libero nostrum! Explicabo, dolorum natus! Expedita, dolores ducimus minus obcaecati delectus, dolor amet reiciendis velit incidunt culpa, numquam accusantium!</p>
          <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas deleniti beatae earum eveniet iusto veniam officiis? Repellat, nobis, sint eveniet qui voluptatibus aspernatur, maiores omnis facilis officiis cupiditate mollitia consectetur!
          Repudiandae vitae atque laudantium. Ad magnam minus qui fugiat excepturi numquam deserunt nobis eveniet? Odit harum reiciendis numquam, alias natus eius odio quaerat, error cupiditate ab vitae iusto porro culpa?
          Laudantium quasi, dolores doloribus itaque maiores voluptate commodi in ex tempore at, suscipit illo amet culpa eos? Odit ex dolorem necessitatibus harum earum, eum, perferendis, sed deserunt corrupti magnam quasi.
          Voluptatum deserunt laudantium totam. Non dolore fuga illo maiores placeat commodi nihil accusamus iste repudiandae adipisci! Consectetur impedit, beatae dolore mollitia nostrum rem asperiores illo quo libero non ab possimus?
          Neque, cumque eaque ducimus laboriosam facilis at fugiat, reiciendis blanditiis expedita libero nostrum! Explicabo, dolorum natus! Expedita, dolores ducimus minus obcaecati delectus, dolor amet reiciendis velit incidunt culpa, numquam accusantium!</p>
          <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas deleniti beatae earum eveniet iusto veniam officiis? Repellat, nobis, sint eveniet qui voluptatibus aspernatur, maiores omnis facilis officiis cupiditate mollitia consectetur!
          Repudiandae vitae atque laudantium. Ad magnam minus qui fugiat excepturi numquam deserunt nobis eveniet? Odit harum reiciendis numquam, alias natus eius odio quaerat, error cupiditate ab vitae iusto porro culpa?
          Laudantium quasi, dolores doloribus itaque maiores voluptate commodi in ex tempore at, suscipit illo amet culpa eos? Odit ex dolorem necessitatibus harum earum, eum, perferendis, sed deserunt corrupti magnam quasi.
          Voluptatum deserunt laudantium totam. Non dolore fuga illo maiores placeat commodi nihil accusamus iste repudiandae adipisci! Consectetur impedit, beatae dolore mollitia nostrum rem asperiores illo quo libero non ab possimus?
          Neque, cumque eaque ducimus laboriosam facilis at fugiat, reiciendis blanditiis expedita libero nostrum! Explicabo, dolorum natus! Expedita, dolores ducimus minus obcaecati delectus, dolor amet reiciendis velit incidunt culpa, numquam accusantium!</p>
          
       </div>
       <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>  
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>   
        </ul>
    </aside>
</main>
      
<?php
include_once("templates/footer.php");
?>