<?php include "templates/include/header.php" ?>
<?php foreach ($results['articles'] as $article) { ?>
    <ul id="headlines">
        <li>
            <h2>
                <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id ?>"><?php echo htmlspecialchars($article->title) ?></a>
            </h2>
            <p class="summary"><?php echo htmlspecialchars($article->summary) ?></p>
            <span class="pubDate"><?php echo date('j F Y', $article->publicationDate) ?></span>
        </li>
    </ul>
<?php } ?>

    </ul>

    <p><?php echo $results['totalRows'] ?> article<?php echo ($results['totalRows'] != 1) ? 's' : '' ?> in total.</p>

    <p><a href="./"><i class="fas fa-home"></i> Return to Homepage</a></p>

<?php include "templates/include/footer.php" ?>