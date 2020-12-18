<?php include "templates/include/header.php" ?>

    <ul id="headlines">

        <?php foreach ($results['articles'] as $article) { ?>

            <li>
                <h2>
                    <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id ?>"><?php echo htmlspecialchars($article->title) ?></a>
                </h2>
                <p class="summary"><?php echo htmlspecialchars($article->summary) ?></p>
                <span class="pubDate"><?php echo date('j F', $article->publicationDate) ?></span>
            </li>

        <?php } ?>

    </ul>

    <p><a class="sidebarred" href="./?action=archive"><i class="fas fa-archive"></i> Article Archive</a></p>

<?php include "templates/include/footer.php" ?>