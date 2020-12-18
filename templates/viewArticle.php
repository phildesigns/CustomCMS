<?php include "templates/include/header.php" ?>

    <h1><?php echo htmlspecialchars( $results['article']->title )?></h1>
    <div class="content"><?php echo $results['article']->content?></div>
    <p class="pubDate"><i class="fas fa-history"></i> Published on <?php echo date('j F Y', $results['article']->publicationDate)?></p>

    <p><a href="./"><i class="fas fa-home"></i> Return to Homepage</a></p>

<?php include "templates/include/footer.php" ?>